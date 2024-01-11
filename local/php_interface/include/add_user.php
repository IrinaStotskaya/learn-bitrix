<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

class UserToGroup {    

    public static function addUser(&$arFields) {

        $user_id = $arFields["ID"];
        $user_role = $arFields["UF_USER_ROLE"][0];
        if ($user_role == '7') {
            $group_id = array(6);
        }
        elseif ($user_role == '8') {
            $group_id = array(7);
        }
        else {
            return;
        }
        CUser::SetUserGroup($user_id, $group_id);
    }
}
