<?php

namespace App\Enums;

enum RoleEnum: string
{
    case SUPER_ADMIN = 'Super Administrator';

    case NATIONAL_ADMIN = 'Administrator Nasional';

    case SPPG_ADMIN = 'Administrator SPPG';
    case KITCHEN_HEAD = 'Kepala Dapur';
    case WAREHOUSE_OFFICER = 'Petugas Gudang';
    case NUTRITIONIST = 'Ahli Gizi';

    case SCHOOL_ADMIN = 'Administrator Sekolah';
    case SCHOOL_OPERATOR = 'Operator Sekolah';

    case POSYANDU_ADMIN = 'Administrator Posyandu';
    case POSYANDU_CADRE = 'Kader Posyandu';

    case AUDITOR = 'Auditor';

    case LEADER = 'Pimpinan';
}