<?php
namespace Rigo\Controller;
use Rigo\Types\Course;
use Rigo\Types\Fitness;
use Rigo\Types\Spiritual;
use Rigo\Types\Inspirational;
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

    public function getDraftSpiritual(){
        $query = Spiritual::all([ 'status' => 'draft' ]);
        $lst = [];
        forEach($query->posts as $spiritual) {
            $lst[] = Spiritual::serialize($spiritual);
        }
        return $lst;
    }

    public function getDraftInspirational(){
        $query = Inspirational::all([ 'status' => 'draft' ]);
        $lst = [];
        forEach($query->posts as $inspirational) {
            $lst[] = Spiritual::serialize($inspirational);
        }
        return $lst;
    }
    
}
?>