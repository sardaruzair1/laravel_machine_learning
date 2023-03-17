<?php
namespace App\Http\Controllers;
use Phpml\Classification\NaiveBayes;
use Phpml\FeatureExtraction\TokenCountVectorizer;
use Phpml\Tokenization\WhitespaceTokenizer;
use Phpml\FeatureExtraction\StopWords\English;
use App\Http\Controllers\WordCountTransformer;
use App\Http\Controllers\PorterStemmer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class MyController extends Controller
{
    public function classifyText()
    {
        $samples = [ ['This is a positive text'],['This is a negative text'],['This is a uzair text'] ];
        $labels = ['positive', 'negative','uzair'];

        $classifier = new NaiveBayes();
        $classifier->train($samples, $labels);

        $input = ['This is a uzair text'];
        $result = $classifier->predict($input);
        
        return view('result')->with('result', $result);
    }
}