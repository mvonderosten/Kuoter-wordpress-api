<?php
namespace Rigo\Controller;
use Rigo\Types\Course;
use Rigo\Types\Fitness;
class SampleController{
    
    public function getHomeData(){
        return [
            'name' => 'Rigoberto'
        ];
    }
    
    public function getDraftCourses(){
        $query = Course::all([ 'status' => 'draft' ]);
        return $query->posts;
    }
    
    public function getDraftFitness(){
        $query = Fitness::all([ 'status' => 'draft' ]);
        $lst = [];
        forEach($query->posts as $fitness) {
            $lst[] = Fitness::serialize($fitness);
        }
        return $lst;
    }
    
}
?>