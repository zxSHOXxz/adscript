<?php

namespace App\Exports;

use Illuminate\Contracts\Database\Eloquent\Builder;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithMapping;

class VisitorsExport implements FromQuery, WithMapping
{
    protected $query;
    protected $oquestions;
    protected $iquestions;

    public function __construct($oquestions, $iquestions)
    {
        $this->oquestions = $oquestions;
        $this->iquestions = $iquestions;
    }
    public function setQuery($query)
    {
        $this->query = $query;
    }

    /**
     * @return Builder
     */
    public function query()
    {
        return $this->query->with('answers.question.options');
    }
    public function map($visitor): array
    {
        $oquestions_answers = $visitor->answers->where('question_type', 'App\Models\Oquestion')->all();
        $iquestions_answers = $visitor->answers->where('question_type', 'App\Models\Iquestion')->all();

        $visitor_data = [
            $visitor->id ?? 'عذرا لا يوجد بيانات',
            $visitor->ip_address ?? 'عذرا لا يوجد بيانات',
        ];

        foreach ($oquestions_answers as $answer) {
            $content = $this->oquestions->find($answer->question_id)
                ->options
                ->where('id', $answer->content)
                ->first();
            $visitor_data[] = $content->content ?? 'عذرا لا يوجد بيانات';
        }

        foreach ($iquestions_answers as $answer) {
            $visitor_data[] = $answer->content ?? 'عذرا لا يوجد بيانات';
        }

        $total_answers_count = count($oquestions_answers) + count($iquestions_answers);
        $missing_answers_count = count($this->oquestions) + count($this->iquestions) - $total_answers_count;

        if ($missing_answers_count > 0) {
            for ($i = 0; $i < $missing_answers_count; $i++) {
                $visitor_data[] = 'عذرا لا يوجد بيانات';
            }
        }

        return $visitor_data;
    }
}
