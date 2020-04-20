<?php
namespace Rigo\Types;
    
use WPAS\Types\BasePostType;
class Inspirational extends BasePostType{
    
    public static function serialize($object){
        
        $arrayObject = (array) $object;
        $arrayObject['iphoto'] = get_field( 'iphoto', $object->ID );
        return $arrayObject;
    }
}
?>