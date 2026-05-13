<?php

namespace App\Helpers;
use Illuminate\Support\Facades\Auth;


class PermissionsHelper
{
    public static function checkWritePermission($roleId)
    {
        return $roleId != 1002;
    }

    public static function checkAdminPermission($roleId)
    {
        return $roleId == 1000 || $roleId == 1003;
    }

    public static function hasPermission($page)
    {

        $roleId = Auth::guard('admin')->user()->role_id;

        if ($page == "Dashboard") {
            return True;
        }

        if ($page == "Management") {
            if ($roleId == 1000 || $roleId == 1001) {
                return True;
            } else {
                return False;
            }
        }
        if ($roleId == 1000 || $roleId == 1001 || $roleId == 1002 || $roleId == 1003) {
            return True;
        }

        if ($page == "News") {
            if ($roleId == 1004 || $roleId == 1006 || $roleId == 1008 || $roleId == 1009 || $roleId == 1007) {
                return True;
            } else {
                return False;
            }
        }

        if ($page == "Events") {
            if ($roleId == 1005 || $roleId == 1006 || $roleId == 1008 || $roleId == 1009 || $roleId == 1007) {
                return True;
            } else {
                return False;
            }
        }

        if ($page == "Gallery") {
            if ($roleId == 1005 || $roleId == 1006 || $roleId == 1004 || $roleId == 1007 || $roleId == 1008 || $roleId == 1009) {
                return True;
            } else {
                return False;
            }
        }

        if ($page == "Research") {
            if ($roleId == 1009) {
                return True;
            } else {
                return False;
            }
        }

        if ($page == "Journals") {
            if ($roleId == 1010) {
                return True;
            } else {
                return False;
            }
        }


        if ($page == "Faculty Outreach" || $page == "Faculties") {
            if ($roleId == 1011) {
                return True;
            } else {
                return False;
            }
        }

        return False;
    }
}
