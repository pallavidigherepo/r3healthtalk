<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\HealthParameter;
use App\Models\Subcategory;

class HealthParameterSeeder extends Seeder
{
    public function run()
    {
        $nutriScore = Subcategory::where('name', 'Nutri-Score')->first();
        HealthParameter::create(['name' => 'Raw Food 1% of Body Weight Daily', 'subcategory_id' => $nutriScore->id]);
        HealthParameter::create(['name' => 'Plant Based Whole Food Diet Only', 'subcategory_id' => $nutriScore->id]);
        HealthParameter::create(['name' => '10 Glasses Of Water Daily', 'subcategory_id' => $nutriScore->id]);
        HealthParameter::create(['name' => 'No Sugar/ Caffiene', 'subcategory_id' => $nutriScore->id]);
        HealthParameter::create(['name' => 'No Binge Eating', 'subcategory_id' => $nutriScore->id]);

        $physicalActivity = Subcategory::where('name', 'Physical Activity Score')->first();
        HealthParameter::create(['name' => '4,000 Steps Before 1st Meal', 'subcategory_id' => $physicalActivity->id]);
        HealthParameter::create(['name' => '10,000 Steps During The Day', 'subcategory_id' => $physicalActivity->id]);
        HealthParameter::create(['name' => '250 Steps Per Waking Hour', 'subcategory_id' => $physicalActivity->id]);
        HealthParameter::create(['name' => '10 Zone Minutes Per Day', 'subcategory_id' => $physicalActivity->id]);
        HealthParameter::create(['name' => 'Yoga/Cycling/FT/ETC', 'subcategory_id' => $physicalActivity->id]);

        $sleepScore = Subcategory::where('name', 'Sleep Score')->first();
        HealthParameter::create(['name' => 'Have A Regular Sleep Routine', 'subcategory_id' => $sleepScore->id]);
        HealthParameter::create(['name' => '7-8 Hours Of Sleep In Night', 'subcategory_id' => $sleepScore->id]);
        HealthParameter::create(['name' => 'No Snoring', 'subcategory_id' => $sleepScore->id]);
        HealthParameter::create(['name' => 'No Blue Light Exposure Just Before Bed', 'subcategory_id' => $sleepScore->id]);
        HealthParameter::create(['name' => 'No Eating Just Before Going To Bed', 'subcategory_id' => $sleepScore->id]);

        $bca = Subcategory::where('name', 'BCA')->first();
        HealthParameter::create(['name' => 'VF>10', 'subcategory_id' => $bca->id]);
        HealthParameter::create(['name' => 'BF > 25 (M)/ 30(F)', 'subcategory_id' => $bca->id]);
        HealthParameter::create(['name' => 'MM < 30', 'subcategory_id' => $bca->id]);
        HealthParameter::create(['name' => 'BA > CA', 'subcategory_id' => $bca->id]);
        HealthParameter::create(['name' => 'BMI > 23', 'subcategory_id' => $bca->id]);

        $metabolicSyndrome = Subcategory::where('name', 'Metabolic Syndrome')->first();
        HealthParameter::create(['name' => 'HIP/WAIST Ratio Men > 1, Women > 0.80', 'subcategory_id' => $metabolicSyndrome->id]);
        HealthParameter::create(['name' => 'Blood Pressure (HIGH)', 'subcategory_id' => $metabolicSyndrome->id]);
        HealthParameter::create(['name' => 'Sugar (HIGH)', 'subcategory_id' => $metabolicSyndrome->id]);
        HealthParameter::create(['name' => 'TG (HIGH)', 'subcategory_id' => $metabolicSyndrome->id]);
        HealthParameter::create(['name' => 'HLD (Low)', 'subcategory_id' => $metabolicSyndrome->id]);

        $hormonalIssues = Subcategory::where('name', 'Hormonal Issues')->first();
        HealthParameter::create(['name' => 'Thyroid', 'subcategory_id' => $hormonalIssues->id]);
        HealthParameter::create(['name' => 'SkinIssue/Hairfall', 'subcategory_id' => $hormonalIssues->id]);
        HealthParameter::create(['name' => 'Sleeping Disorder', 'subcategory_id' => $hormonalIssues->id]);
        HealthParameter::create(['name' => 'Mental Health Issue', 'subcategory_id' => $hormonalIssues->id]);
        HealthParameter::create(['name' => 'PCOD', 'subcategory_id' => $hormonalIssues->id]);
        HealthParameter::create(['name' => 'Fatigue', 'subcategory_id' => $hormonalIssues->id]);

        $gutHealth = Subcategory::where('name', 'Gut Health')->first();
        HealthParameter::create(['name' => 'Acidity', 'subcategory_id' => $gutHealth->id]);
        HealthParameter::create(['name' => 'Bloating/Gas/Excess Burping', 'subcategory_id' => $gutHealth->id]);
        HealthParameter::create(['name' => 'IBS', 'subcategory_id' => $gutHealth->id]);
        HealthParameter::create(['name' => 'Constipation', 'subcategory_id' => $gutHealth->id]);
        HealthParameter::create(['name' => 'Gall Bladder Problems', 'subcategory_id' => $gutHealth->id]);

    }
}

