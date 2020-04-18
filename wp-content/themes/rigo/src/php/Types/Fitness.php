<?php
namespace Rigo\Types;
    
use WPAS\Types\BasePostType;
class Fitness extends BasePostType{
    
    public static function serialize($object){
        
        $arrayObject = (array) $object;
        $arrayObject['fphoto'] = get_field( 'fphoto', $object->ID );
        return $arrayObject;
    }
}
?>