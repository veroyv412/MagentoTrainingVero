<?php
/**
 * Created by JetBrains PhpStorm.
 * User: veritto
 * Date: 3/13/14
 * Time: 12:40 PM
 * To change this template use File | Settings | File Templates.
 */

class Summa_Comment_Block_List extends Mage_Core_Block_Template
{


    function getCommentList()
    {
        $collection = Mage::getResourceModel("summa_comment/comment_collection");
        $comments = $collection->getData();

        return $comments;
    }

    function getUserName( $user_id ){
        $user = Mage::getModel('customer/customer')
            ->load($user_id)->getData();
        return $user['firstname'] . " " . $user['lastname'];
    }
}