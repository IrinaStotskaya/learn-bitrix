<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

class UserToGroup {    

    public static function addUser(&$arFields) {

        $context = \Bitrix\Main\Application::getInstance()->getContext();
        $request = $context->getRequest();
        $user_id = $arFields["ID"];
        $user_role = $request->getPost("UF_USER_ROLE");
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
