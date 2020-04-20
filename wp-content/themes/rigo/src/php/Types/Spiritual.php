<?php
namespace Rigo\Types;
    
use WPAS\Types\BasePostType;
class Spiritual extends BasePostType{
    
    public static function serialize($object){
        
        $arrayObject = (array) $object;
        $arrayObject['sphoto'] = get_field( 'sphoto', $object->ID );
        return $arrayObject;
    }
}
?>