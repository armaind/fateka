<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserRolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = Role::create(['name' => 'admin']);
        $role_dosen = Role::create(['name' => 'dosen']);
        $role_alumni = Role::create(['name' => 'alumni']);
        $role_mahasiswa = Role::create(['name' => 'mahasiswa']);
        
        // $permission = Permission::create(['name' => 'read role']);
        // $permission = Permission::create(['name' => 'create role']);
        // $permission = Permission::create(['name' => 'update role']);
        // $permission = Permission::create(['name' => 'delete role']);
        
        $permission = Permission::create(['name' => 'create data alumni']);
        $permission = Permission::create(['name' => 'create berita']);
        $permission = Permission::create(['name' => 'create artikel']);
        $permission = Permission::create(['name' => 'create kegiatan']);
        $permission = Permission::create(['name' => 'create lowongan kerja']);
        $permission = Permission::create(['name' => 'create kuisioner']);
        
        $permission = Permission::create(['name' => 'update data alumni']);
        $permission = Permission::create(['name' => 'update berita']);
        $permission = Permission::create(['name' => 'update artikel']);
        $permission = Permission::create(['name' => 'update kegiatan']);
        $permission = Permission::create(['name' => 'update lowongan kerja']);
        $permission = Permission::create(['name' => 'update kuisioner']);
        
        $permission = Permission::create(['name' => 'delete data alumni']);
        $permission = Permission::create(['name' => 'delete berita']);
        $permission = Permission::create(['name' => 'delete artikel']);
        $permission = Permission::create(['name' => 'delete kegiatan']);
        $permission = Permission::create(['name' => 'delete lowongan kerja']);
        $permission = Permission::create(['name' => 'delete kuisioner']);
        
        $role_admin->givePermissionTo(['create data alumni', 'update data alumni', 'delete data alumni', 'create berita', 'update berita', 'delete berita', 'create artikel', 'update artikel', 'delete artikel','create kegiatan', 'update kegiatan', 'delete kegiatan', 'create lowongan kerja', 'update lowongan kerja', 'delete lowongan kerja', 'create kuisioner', 'update kuisioner', 'delete kuisioner']);
        $role_dosen->givePermissionTo(['create berita', 'update berita', 'delete berita', 'create artikel', 'update artikel', 'delete artikel','create kegiatan', 'update kegiatan', 'delete kegiatan', 'create lowongan kerja', 'update lowongan kerja', 'delete lowongan kerja', 'create kuisioner', 'update kuisioner', 'delete kuisioner']);
        $role_alumni->givePermissionTo(['create artikel', 'update artikel', 'delete artikel', 'create kegiatan', 'update kegiatan', 'delete kegiatan', 'create lowongan kerja', 'update lowongan kerja', 'delete lowongan kerja']);
        $role_mahasiswa->givePermissionTo(['create artikel', 'update artikel', 'delete artikel']);

        $default_user_value = [
            'google_id'=> '123123123',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];
        
        $admin = User::create(array_merge([
            'email' => 'admin@gmail.com',
            'name' => 'admin',
            'role_id' => '1'
        ], $default_user_value));
        $admin->assignRole('admin');
        
        $dosen = User::create(array_merge([
            'email' => 'dosen@gmail.com',
            'name' => 'dosen',
            'role_id' => '2'
        ], $default_user_value));
        $dosen->assignRole('dosen');
        
        $alumni = User::create(array_merge([
            'email' => 'alumni@gmail.com',
            'name' => 'alumni',
            'role_id' => '3'
        ], $default_user_value));
        $alumni->assignRole('alumni');
        
        $mahasiswa = User::create(array_merge([
            'email' => 'mahasiswa@gmail.com',
            'name' => 'mahasiswa',
            'role_id' => '4'
        ], $default_user_value));
        $mahasiswa->assignRole('mahasiswa');

        
        $dosen1 = User::create(([
            'email' => '11850763@gmail.com',
            'name' => 'UMAR ALI AHMAD Ph.D.',
            'role_id' => '2',
            'google_id' => '',
            'email_verified_at' => now(),
            'password' => bcrypt('11850763'),
            'remember_token' => Str::random(10)
        ]));
        $dosen1 ->assignRole('dosen');
        
        $dosen2 = User::create(([
            'email' => '10880005@gmail.com',
            'name' => 'AGUNG NUGROHO JATI S.T., M.T.',
            'role_id' => '2',
            'google_id' => '',
            'email_verified_at' => now(),
            'password' => bcrypt('10880005'),
            'remember_token' => Str::random(10)
        ]));
        $dosen2 ->assignRole('dosen');
        
        $dosen3 = User::create(([
            'email' => '93660027@gmail.com',
            'name' => 'Ir. AGUS VIRGONO M.T.',
            'role_id' => '2',
            'google_id' => '',
            'email_verified_at' => now(),
            'password' => bcrypt('93660027'),
            'remember_token' => Str::random(10)
        ]));
        $dosen3 ->assignRole('dosen');

        $dosen4 = User::create(([
            'email' => '14860078@gmail.com',
            'name' => 'ANDREW BRIAN OSMOND S.T., M.T.',
            'role_id' => '2',
            'google_id' => '',
            'email_verified_at' => now(),
            'password' => bcrypt('14860078'),
            'remember_token' => Str::random(10)
        ]));
        $dosen4 ->assignRole('dosen');

        $dosen5 = User::create(([
            'email' => '15900014@gmail.com',
            'name' => 'ANGGUNMEKA LUHUR PRASASTI S.T., M.T.',
            'role_id' => '2',
            'google_id' => '',
            'email_verified_at' => now(),
            'password' => bcrypt('15900014'),
            'remember_token' => Str::random(10)
        ]));
        $dosen5 ->assignRole('dosen');

        $dosen6 = User::create(([
            'email' => '20930008@gmail.com',
            'name' => 'ASHRI DINIMAHARAWATI S.Pd., M.T.',
            'role_id' => '2',
            'google_id' => '',
            'email_verified_at' => now(),
            'password' => bcrypt('20930008'),
            'remember_token' => Str::random(10)
        ]));
        $dosen6 ->assignRole('dosen');

        $dosen7 = User::create(([
            'email' => '22800003@gmail.com',
            'name' => 'Dr. Eng. ASIF AWALUDIN S.T., M.Sc.',
            'role_id' => '2',
            'google_id' => '',
            'email_verified_at' => now(),
            'password' => bcrypt('22800003'),
            'remember_token' => Str::random(10)
        ]));
        $dosen7 ->assignRole('dosen');

        $dosen8 = User::create(([
            'email' => '10800053@gmail.com',
            'name' => 'ASTRI NOVIANTY S.T., M.T.',
            'role_id' => '2',
            'google_id' => '',
            'email_verified_at' => now(),
            'password' => bcrypt('10800053'),
            'remember_token' => Str::random(10)
        ]));
        $dosen8 ->assignRole('dosen');

        $dosen9 = User::create(([
            'email' => '08740064@gmail.com',
            'name' => 'BUDHI IRAWAN S.Si., M.T.',
            'role_id' => '2',
            'google_id' => '',
            'email_verified_at' => now(),
            'password' => bcrypt('08740064'),
            'remember_token' => Str::random(10)
        ]));
        $dosen9 ->assignRole('dosen');
        
        $dosen10 = User::create(([
            'email' => '93680020@gmail.com',
            'name' => 'Ir. BURHANUDDIN DIRGANTORO M.T.',
            'role_id' => '2',
            'google_id' => '',
            'email_verified_at' => now(),
            'password' => bcrypt('93680020'),
            'remember_token' => Str::random(10)
        ]));
        $dosen10 ->assignRole('dosen');

        $dosen11 = User::create(([
            'email' => '19890019@gmail.com',
            'name' => 'CASI SETIANINGSIH S.T., M.T.',
            'role_id' => '2',
            'google_id' => '',
            'email_verified_at' => now(),
            'password' => bcrypt('19890019'),
            'remember_token' => Str::random(10)
        ]));
        $dosen11 ->assignRole('dosen');

        $dosen12 = User::create(([
            'email' => '19830004@gmail.com',
            'name' => 'Dipl.-Ing. DICK MARYOPI Ph.D.',
            'role_id' => '2',
            'google_id' => '',
            'email_verified_at' => now(),
            'password' => bcrypt('19830004'),
            'remember_token' => Str::random(10)
        ]));
        $dosen12 ->assignRole('dosen');

        $dosen13 = User::create(([
            'email' => '15890008@gmail.com',
            'name' => 'FAIRUZ AZMI ST., M.T.',
            'role_id' => '2',
            'google_id' => '',
            'email_verified_at' => now(),
            'password' => bcrypt('15890008'),
            'remember_token' => Str::random(10)
        ]));
        $dosen13 ->assignRole('dosen');

        $dosen14 = User::create(([
            'email' => '20910005@gmail.com',
            'name' => 'FAISAL CANDRASYAH HASIBUAN S.T., M.T.',
            'role_id' => '2',
            'google_id' => '',
            'email_verified_at' => now(),
            'password' => bcrypt('20910005'),
            'remember_token' => Str::random(10)
        ]));
        $dosen14 ->assignRole('dosen');

        $dosen15 = User::create(([
            'email' => '20950005@gmail.com',
            'name' => 'FUSSY MENTARI DIRGANTARA S.T., M.T.',
            'role_id' => '2',
            'google_id' => '',
            'email_verified_at' => now(),
            'password' => bcrypt('20950005'),
            'remember_token' => Str::random(10)
        ]));
        $dosen15 ->assignRole('dosen');

        $dosen16 = User::create(([
            'email' => '22850001@gmail.com',
            'name' => 'IZAZI MUBAROK S.ST., M.Sc.',
            'role_id' => '2',
            'google_id' => '',
            'email_verified_at' => now(),
            'password' => bcrypt('22850001'),
            'remember_token' => Str::random(10)
        ]));
        $dosen16 ->assignRole('dosen');

        $dosen17 = User::create(([
            'email' => '13750017@gmail.com',
            'name' => 'Dr. MARISA W. PARYASTO S.T., M.T.',
            'role_id' => '2',
            'google_id' => '',
            'email_verified_at' => now(),
            'password' => bcrypt('13750017'),
            'remember_token' => Str::random(10)
        ]));
        $dosen17 ->assignRole('dosen');

        $dosen18 = User::create(([
            'email' => '18890135@gmail.com',
            'name' => 'Dr. META KALLISTA S.Si., M.Si.',
            'role_id' => '2',
            'google_id' => '',
            'email_verified_at' => now(),
            'password' => bcrypt('18890135'),
            'remember_token' => Str::random(10)
        ]));
        $dosen18 ->assignRole('dosen');

        $dosen19 = User::create(([
            'email' => '20920031@gmail.com',
            'name' => 'MUHAMMAD FARIS RURIAWAN S.T., M.T.',
            'role_id' => '2',
            'google_id' => '',
            'email_verified_at' => now(),
            'password' => bcrypt('20920031'),
            'remember_token' => Str::random(10)
        ]));
        $dosen19 ->assignRole('dosen');

        $dosen20 = User::create(([
            'email' => '10750046@gmail.com',
            'name' => 'MUHAMMAD NASRUN S.Si., M.T.',
            'role_id' => '2',
            'google_id' => '',
            'email_verified_at' => now(),
            'password' => bcrypt('10750046'),
            'remember_token' => Str::random(10)
        ]));
        $dosen20 ->assignRole('dosen');

        $dosen21 = User::create(([
            'email' => '18890138@gmail.com',
            'name' => 'NOVERA ISTIQOMAH S.T., M.T.',
            'role_id' => '2',
            'google_id' => '',
            'email_verified_at' => now(),
            'password' => bcrypt('18890138'),
            'remember_token' => Str::random(10)
        ]));
        $dosen21 ->assignRole('dosen');

        $dosen22 = User::create(([
            'email' => '20840004@gmail.com',
            'name' => 'PRAYITNO ABADI S.Si., M.Si.',
            'role_id' => '2',
            'google_id' => '',
            'email_verified_at' => now(),
            'password' => bcrypt('20840004'),
            'remember_token' => Str::random(10)
        ]));
        $dosen22 ->assignRole('dosen');

        $dosen23 = User::create(([
            'email' => '10800047@gmail.com',
            'name' => 'Dr. PURBA DARU KUSUMA S.T., M.T.',
            'role_id' => '2',
            'google_id' => '',
            'email_verified_at' => now(),
            'password' => bcrypt('10800047'),
            'remember_token' => Str::random(10)
        ]));
        $dosen23 ->assignRole('dosen');

        $dosen24 = User::create(([
            'email' => '15870030@gmail.com',
            'name' => 'RANDY ERFA SAPUTRA S.T., M.T.',
            'role_id' => '2',
            'google_id' => '',
            'email_verified_at' => now(),
            'password' => bcrypt('15870030'),
            'remember_token' => Str::random(10)
        ]));
        $dosen24 ->assignRole('dosen');

        $dosen25 = User::create(([
            'email' => '20930005@gmail.com',
            'name' => 'RATNA ASTUTI NUGRAHAENI S.T., M.T.',
            'role_id' => '2',
            'google_id' => '',
            'email_verified_at' => now(),
            'password' => bcrypt('20930005'),
            'remember_token' => Str::random(10)
        ]));
        $dosen25 ->assignRole('dosen');

        $dosen26 = User::create(([
            'email' => '20910011@gmail.com',
            'name' => 'Dr. REZA RENDIAN SEPTIAWAN S.Si, M.Si, M.Sc',
            'role_id' => '2',
            'google_id' => '',
            'email_verified_at' => now(),
            'password' => bcrypt('20910011'),
            'remember_token' => Str::random(10)
        ]));
        $dosen26 ->assignRole('dosen');

        $dosen27 = User::create(([
            'email' => '21750003@gmail.com',
            'name' => 'Dr. RISMAN ADNAN MATTOTORANG S.Si., M.Si.',
            'role_id' => '2',
            'google_id' => '',
            'email_verified_at' => now(),
            'password' => bcrypt('21750003'),
            'remember_token' => Str::random(10)
        ]));
        $dosen27 ->assignRole('dosen');

        $dosen28 = User::create(([
            'email' => '14780013@gmail.com',
            'name' => 'ROSWAN LATUCONSINA S.T., M.T.',
            'role_id' => '2',
            'google_id' => '',
            'email_verified_at' => now(),
            'password' => bcrypt('14780013'),
            'remember_token' => Str::random(10)
        ]));
        $dosen28 ->assignRole('dosen');

        $dosen29 = User::create(([
            'email' => '13860021@gmail.com',
            'name' => 'SURYA MICHRANDI NASUTION S.T., M.T.',
            'role_id' => '2',
            'google_id' => '',
            'email_verified_at' => now(),
            'password' => bcrypt('13860021'),
            'remember_token' => Str::random(10)
        ]));
        $dosen29 ->assignRole('dosen');

        $dosen30 = User::create(([
            'email' => '14730053@gmail.com',
            'name' => 'Dr. TITO WALUYO PURBOYO S. Si., S.T., M.PMat.',
            'role_id' => '2',
            'google_id' => '',
            'email_verified_at' => now(),
            'password' => bcrypt('14730053'),
            'remember_token' => Str::random(10)
        ]));
        $dosen30 ->assignRole('dosen');

        $dosen31 = User::create(([
            'email' => '20790002@gmail.com',
            'name' => 'Dr. WENDI HARJUPA M. Eng',
            'role_id' => '2',
            'google_id' => '',
            'email_verified_at' => now(),
            'password' => bcrypt('20790002'),
            'remember_token' => Str::random(10)
        ]));
        $dosen31 ->assignRole('dosen');

        $dosen32 = User::create(([
            'email' => '21850001@gmail.com',
            'name' => 'WILDAN PANJI TRESNA Ph.D.',
            'role_id' => '2',
            'google_id' => '',
            'email_verified_at' => now(),
            'password' => bcrypt('21850001'),
            'remember_token' => Str::random(10)
        ]));
        $dosen32 ->assignRole('dosen');

        $dosen33 = User::create(([
            'email' => '02770066@gmail.com',
            'name' => 'Dr. YUDHA PURWANTO S.T., M.T.',
            'role_id' => '2',
            'google_id' => '',
            'email_verified_at' => now(),
            'password' => bcrypt('02770066'),
            'remember_token' => Str::random(10)
        ]));
        $dosen33 ->assignRole('dosen');
        


        // $default_user_value = [
        //     'google_id'=> '123123123',
        //     'email_verified_at' => now(),
        //     'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        //     'remember_token' => Str::random(10),
        // ];
        // DB::beginTransaction();
        // try {
        //     $dosen = User::create(array_merge([
        //         'email' => '11850763@gmail.com',
        //         'name' => 'UMAR ALI AHMAD Ph.D.',
        //         'role_id' => '2',
        //         'google_id' => '',
        //         'email_verified_at' => now(),
        //         'password' => '$2a$04$ewGbq.Ppz4DE3tMMMBeKpuuC3Oo.CK.lZLBskexo2rmLpYNjUmxIi',
        //         'remember_token' => Str::random(10)
        //     ]));
        //     $dosen = User::create(array_merge([
        //         'email' => '10880005@gmail.com',
        //         'name' => 'AGUNG NUGROHO JATI S.T., M.T.',
        //         'role_id' => '2',
        //         'google_id' => '',
        //         'email_verified_at' => now(),
        //         'password' => '$2a$04$34GyW6/7dM0U2zu5ozU4S.6l07d2viqtsCYcEGP9wbx.2ji/bxnN.',
        //         'remember_token' => Str::random(10)
        //     ]));
        //     $dosen = User::create(array_merge([
        //         'email' => '93660027@gmail.com',
        //         'name' => 'Ir. AGUS VIRGONO M.T.',
        //         'role_id' => '2',
        //         'google_id' => '',
        //         'email_verified_at' => now(),
        //         'password' => '$2a$04$1Fv9EVZw2R7fArulqOkMCu0NO.u9eEbmRvHjaLyom0gzhCxlUgKWW',
        //         'remember_token' => Str::random(10)
        //     ]));
        //     $dosen = User::create(array_merge([
        //         'email' => '14860078@gmail.com',
        //         'name' => 'ANDREW BRIAN OSMOND S.T., M.T.',
        //         'role_id' => '2',
        //         'google_id' => '',
        //         'email_verified_at' => now(),
        //         'password' => '$2a$04$EfJtUuCfb6uJx/v7mAtaQeH6.FAcKf7a.gHsB9Ww5.4wrC.Iybru2',
        //         'remember_token' => Str::random(10)
        //     ]));
        //     $dosen = User::create(array_merge([
        //         'email' => '15900014@gmail.com',
        //         'name' => 'ANGGUNMEKA LUHUR PRASASTI S.T., M.T.',
        //         'role_id' => '2',
        //         'google_id' => '',
        //         'email_verified_at' => now(),
        //         'password' => '$2a$04$IeB4Wa5KEnQPsg9JEoZN0uQok1iLleMYgnEZlrWq0CtMnrb45F5mG',
        //         'remember_token' => Str::random(10)
        //     ]));
        //     $dosen = User::create(array_merge([
        //         'email' => '20930008@gmail.com',
        //         'name' => 'ASHRI DINIMAHARAWATI S.Pd., M.T.',
        //         'role_id' => '2',
        //         'google_id' => '',
        //         'email_verified_at' => now(),
        //         'password' => '$2a$04$QmQFZjSOsTCb10khSz47qeONms3vz32JBZfoUN78tOKxBLAkQduTS',
        //         'remember_token' => Str::random(10)
        //     ]));
        //     $dosen = User::create(array_merge([
        //         'email' => '22800003@gmail.com',
        //         'name' => 'Dr. Eng. ASIF AWALUDIN S.T., M.Sc.',
        //         'role_id' => '2',
        //         'google_id' => '',
        //         'email_verified_at' => now(),
        //         'password' => '$2a$04$Z4W31hbYC4QyfLhGuF4EyOz3/swhyQe9XOEYR2DqQvuoGd4FpmKW2',
        //         'remember_token' => Str::random(10)
        //     ]));
        //     $dosen = User::create(array_merge([
        //         'email' => '10800053@gmail.com',
        //         'name' => 'ASTRI NOVIANTY S.T., M.T.',
        //         'role_id' => '2',
        //         'google_id' => '',
        //         'email_verified_at' => now(),
        //         'password' => '$2a$04$ak2jmiZV/2ue7PwGyHOb4.hl0p2IUQ5SWnMx64genWr2xUcV.B78.',
        //         'remember_token' => Str::random(10)
        //     ]));
        //     $dosen = User::create(array_merge([
        //         'email' => '08740064@gmail.com',
        //         'name' => 'BUDHI IRAWAN S.Si., M.T.',
        //         'role_id' => '2',
        //         'google_id' => '',
        //         'email_verified_at' => now(),
        //         'password' => '$2a$04$vuuSB0/wWKwsxz9kCXEZJulPth.rNboR.mcRkEDt1tgwq/Oav6o06',
        //         'remember_token' => Str::random(10)
        //     ]));
        //     $dosen = User::create(array_merge([
        //         'email' => '93680020@gmail.com',
        //         'name' => 'Ir. BURHANUDDIN DIRGANTORO M.T.',
        //         'role_id' => '2',
        //         'google_id' => '',
        //         'email_verified_at' => now(),
        //         'password' => '$2a$04$nqWVSmFbpcJEgZHeN/c9eeh/A1cLgjvWg2cF0YiYcXiGqShp00srS',
        //         'remember_token' => Str::random(10)
        //     ]));
        //     $dosen = User::create(array_merge([
        //         'email' => '19890019@gmail.com',
        //         'name' => 'CASI SETIANINGSIH S.T., M.T.',
        //         'role_id' => '2',
        //         'google_id' => '',
        //         'email_verified_at' => now(),
        //         'password' => '$2a$04$xDgpp0dhCHM3iydcWKYed.07bbHsMOqt2YgsDEDC2DR2QvqrgYS5S',
        //         'remember_token' => Str::random(10)
        //     ]));
        //     $dosen = User::create(array_merge([
        //         'email' => '19830004@gmail.com',
        //         'name' => 'Dipl.-Ing. DICK MARYOPI Ph.D.',
        //         'role_id' => '2',
        //         'google_id' => '',
        //         'email_verified_at' => now(),
        //         'password' => '$2a$04$b4lWnsowzhCJUt1P8MbnfuH6M8MYtQzwsY585KeuN0TVA9WID40CW',
        //         'remember_token' => Str::random(10)
        //     ]));
        //     $dosen = User::create(array_merge([
        //         'email' => '15890008@gmail.com',
        //         'name' => 'FAIRUZ AZMI ST., M.T.',
        //         'role_id' => '2',
        //         'google_id' => '',
        //         'email_verified_at' => now(),
        //         'password' => '$2a$04$5mbaJYmu/szn1/JSQcOhVuvRsktKJ6VwxOwuHii7MMW6GTwDWOBDu',
        //         'remember_token' => Str::random(10)
        //     ]));
        //     $dosen = User::create(array_merge([
        //         'email' => '20910005@gmail.com',
        //         'name' => 'FAISAL CANDRASYAH HASIBUAN S.T., M.T.',
        //         'role_id' => '2',
        //         'google_id' => '',
        //         'email_verified_at' => now(),
        //         'password' => '$2a$04$nWgbcGvH7OvKmwJSiNIwr.tzt3GMrDGWLumv5mJcOtNjZPwgo5zUe',
        //         'remember_token' => Str::random(10)
        //     ]));
        //     $dosen = User::create(array_merge([
        //         'email' => '20950005@gmail.com',
        //         'name' => 'FUSSY MENTARI DIRGANTARA S.T., M.T.',
        //         'role_id' => '2',
        //         'google_id' => '',
        //         'email_verified_at' => now(),
        //         'password' => '$2a$04$bun3IhnaNg6wgUIKmVhp.e1KcS82H.Zg11hFLpBM12bItR28HD0TG',
        //         'remember_token' => Str::random(10)
        //     ]));
        //     $dosen = User::create(array_merge([
        //         'email' => '22850001@gmail.com',
        //         'name' => 'IZAZI MUBAROK S.ST., M.Sc.',
        //         'role_id' => '2',
        //         'google_id' => '',
        //         'email_verified_at' => now(),
        //         'password' => '$2a$04$KrjKzc8Tx71kGmpjNRxbd.3MmZnaV0Mk1rlwCucsmbxFEqqW4EsWa',
        //         'remember_token' => Str::random(10)
        //     ]));
        //     $dosen = User::create(array_merge([
        //         'email' => '13750017@gmail.com',
        //         'name' => 'Dr. MARISA W. PARYASTO S.T., M.T.',
        //         'role_id' => '2',
        //         'google_id' => '',
        //         'email_verified_at' => now(),
        //         'password' => '$2a$04$LptXPtLkE44j6eo8NCxmEei0BI8Brh4SOPQXTxP2xS.mw2Pr98CA.',
        //         'remember_token' => Str::random(10)
        //     ]));
        //     $dosen = User::create(array_merge([
        //         'email' => '18890135@gmail.com',
        //         'name' => 'Dr. META KALLISTA S.Si., M.Si.',
        //         'role_id' => '2',
        //         'google_id' => '',
        //         'email_verified_at' => now(),
        //         'password' => '$2a$04$RHKUIM4wgZI8g1HiGib.7eKm9g4Hx4c34j6xB5k5B9CzjCLHCHMnu',
        //         'remember_token' => Str::random(10)
        //     ]));
        //     $dosen = User::create(array_merge([
        //         'email' => '20920031@gmail.com',
        //         'name' => 'MUHAMMAD FARIS RURIAWAN S.T., M.T.',
        //         'role_id' => '2',
        //         'google_id' => '',
        //         'email_verified_at' => now(),
        //         'password' => '$2a$04$0WVxk8d/I2kxSfA73Z125uvogfWZcFbVQ9UqBMNFNJsPHSyiqra7e',
        //         'remember_token' => Str::random(10)
        //     ]));
        //     $dosen = User::create(array_merge([
        //         'email' => '10750046@gmail.com',
        //         'name' => 'MUHAMMAD NASRUN S.Si., M.T.',
        //         'role_id' => '2',
        //         'google_id' => '',
        //         'email_verified_at' => now(),
        //         'password' => '$2a$04$Dsd9joSTK4xEKAYAUUbtzOqrQOk4pJ6fWU/5631cW20IyKTdktp6i',
        //         'remember_token' => Str::random(10)
        //     ]));
        //     $dosen = User::create(array_merge([
        //         'email' => '18890138@gmail.com',
        //         'name' => 'NOVERA ISTIQOMAH S.T., M.T.',
        //         'role_id' => '2',
        //         'google_id' => '',
        //         'email_verified_at' => now(),
        //         'password' => '$2a$04$mQ7X8Qkf0vHZStUbA6RfYe.xz5LXQ07hx0sL.gUM4f5Zb7KWF1t0C',
        //         'remember_token' => Str::random(10)
        //     ]));
        //     $dosen = User::create(array_merge([
        //         'email' => '20840004@gmail.com',
        //         'name' => 'PRAYITNO ABADI S.Si., M.Si.',
        //         'role_id' => '2',
        //         'google_id' => '',
        //         'email_verified_at' => now(),
        //         'password' => '$2a$04$X.n2moGB2J1uu8aMEpLOJu32ZxN58Z2creFB/62cuyVht6oTJCZJy',
        //         'remember_token' => Str::random(10)
        //     ]));
        //     $dosen = User::create(array_merge([
        //         'email' => '10800047@gmail.com',
        //         'name' => 'Dr. PURBA DARU KUSUMA S.T., M.T.',
        //         'role_id' => '2',
        //         'google_id' => '',
        //         'email_verified_at' => now(),
        //         'password' => '$2a$04$YoN6hlowvbPPC0GRTUYk5uWERR/ZEKLnKGnd.gZMDUOsacyu/ytZa',
        //         'remember_token' => Str::random(10)
        //     ]));
        //     $dosen = User::create(array_merge([
        //         'email' => '15870030@gmail.com',
        //         'name' => 'RANDY ERFA SAPUTRA S.T., M.T.',
        //         'role_id' => '2',
        //         'google_id' => '',
        //         'email_verified_at' => now(),
        //         'password' => '$2a$04$SbyXO8NHmcLJGdsLoM3oLeaaanYc3d7fqSCtV7bKlh.elpDQT1byi',
        //         'remember_token' => Str::random(10)
        //     ]));
        //     $dosen = User::create(array_merge([
        //         'email' => '20930005@gmail.com',
        //         'name' => 'RATNA ASTUTI NUGRAHAENI S.T., M.T.',
        //         'role_id' => '2',
        //         'google_id' => '',
        //         'email_verified_at' => now(),
        //         'password' => '$2a$04$hl0ui.rVdoorn2ee6E.mle2UyoX75fH.EnNjBy5DvGyueQzzer7ES',
        //         'remember_token' => Str::random(10)
        //     ]));
        //     $dosen = User::create(array_merge([
        //         'email' => '20910011@gmail.com',
        //         'name' => 'Dr. REZA RENDIAN SEPTIAWAN S.Si, M.Si, M.Sc',
        //         'role_id' => '2',
        //         'google_id' => '',
        //         'email_verified_at' => now(),
        //         'password' => '$2a$04$2TBYmlpBQablegYCFWw5h.gbVTGmvgf.6HL//JkAtuTTs/YVnpIyO',
        //         'remember_token' => Str::random(10)
        //     ]));
        //     $dosen = User::create(array_merge([
        //         'email' => '21750003@gmail.com',
        //         'name' => 'Dr. RISMAN ADNAN MATTOTORANG S.Si., M.Si.',
        //         'role_id' => '2',
        //         'google_id' => '',
        //         'email_verified_at' => now(),
        //         'password' => '$2a$04$0GBU6.lK4o58eldlmx9ZTO9v.5lgOlehBbHSTmm37Jy8Sw.nDjJO2',
        //         'remember_token' => Str::random(10)
        //     ]));
        //     $dosen = User::create(array_merge([
        //         'email' => '14780013@gmail.com',
        //         'name' => 'ROSWAN LATUCONSINA S.T., M.T.',
        //         'role_id' => '2',
        //         'google_id' => '',
        //         'email_verified_at' => now(),
        //         'password' => '$2a$04$z6.WQ2viphata2zVRM2TYu4FhWsWqDbt5wWJRv6dkrMKlkQz5TqVO',
        //         'remember_token' => Str::random(10)
        //     ]));
        //     $dosen = User::create(array_merge([
        //         'email' => '13860021@gmail.com',
        //         'name' => 'SURYA MICHRANDI NASUTION S.T., M.T.',
        //         'role_id' => '2',
        //         'google_id' => '',
        //         'email_verified_at' => now(),
        //         'password' => '$2a$04$XdE0gqGN7KE0rw5ti1MPQOmHTMxSQwMx4gz3e6z1h4jQegOR5WqLa',
        //         'remember_token' => Str::random(10)
        //     ]));
        //     $dosen = User::create(array_merge([
        //         'email' => '14730053@gmail.com',
        //         'name' => 'Dr. TITO WALUYO PURBOYO S. Si., S.T., M.PMat.',
        //         'role_id' => '2',
        //         'google_id' => '',
        //         'email_verified_at' => now(),
        //         'password' => '$2a$04$vZ/9rUJOjFDzlijz5gW6yeP0mQasfhok.UozpvDfegu7IYkqXtr7G',
        //         'remember_token' => Str::random(10)
        //     ]));
        //     $dosen = User::create(array_merge([
        //         'email' => '20790002@gmail.com',
        //         'name' => 'Dr. WENDI HARJUPA M. Eng',
        //         'role_id' => '2',
        //         'google_id' => '',
        //         'email_verified_at' => now(),
        //         'password' => '$2a$04$0vv6GjyyArbIpeJQAnruPOpPl6pPR1APgOGoQPTe.csCawmIPKkWi',
        //         'remember_token' => Str::random(10)
        //     ]));
        //     $dosen = User::create(array_merge([
        //         'email' => '21850001@gmail.com',
        //         'name' => 'WILDAN PANJI TRESNA Ph.D.',
        //         'role_id' => '2',
        //         'google_id' => '',
        //         'email_verified_at' => now(),
        //         'password' => '$2a$04$Cnv/9fSlFo/dtH/RuIY0GOVWDqIDgmstb1c4eLRgxsvoINPxMzzp2',
        //         'remember_token' => Str::random(10)
        //     ]));
        //     $dosen = User::create(array_merge([
        //         'email' => '02770066@gmail.com',
        //         'name' => 'Dr. YUDHA PURWANTO S.T., M.T.',
        //         'role_id' => '2',
        //         'google_id' => '',
        //         'email_verified_at' => now(),
        //         'password' => '$2a$04$SmGLePHmvBMb8SzCFON5sOgpZv1k8q.ys7rCO2vCfhp8aEwC99wkO',
        //         'remember_token' => Str::random(10)
        //     ]));


        //     $admin = User::create(array_merge([
        //         'email' => 'admin@gmail.com',
        //         'name' => 'admin',
        //         'role_id' => '1'
        //     ], $default_user_value));
    
        //     $dosen = User::create(array_merge([
        //         'email' => 'dosen@gmail.com',
        //         'name' => 'dosen',
        //         'role_id' => '2'
        //     ], $default_user_value));
    
        //     $alumni = User::create(array_merge([
        //         'email' => 'alumni@gmail.com',
        //         'name' => 'alumni',
        //         'role_id' => '3'
        //     ], $default_user_value));
    
        //     $mahasiswa = User::create(array_merge([
        //         'email' => 'mahasiswa@gmail.com',
        //         'name' => 'mahasiswa',
        //         'role_id' => '4'
        //     ], $default_user_value));
    
        //     $role_admin = Role::create(['name' => 'admin']);
        //     $role_dosen = Role::create(['name' => 'dosen']);
        //     $role_alumni = Role::create(['name' => 'alumni']);
        //     $role_mahasiswa = Role::create(['name' => 'mahasiswa']);
    
        //     $permission = Permission::create(['name' => 'read role']);
        //     $permission = Permission::create(['name' => 'create role']);
        //     $permission = Permission::create(['name' => 'update role']);
        //     $permission = Permission::create(['name' => 'delete role']);

        //     $permission = Permission::create(['name' => 'create data alumni']);
        //     $permission = Permission::create(['name' => 'create berita']);
        //     $permission = Permission::create(['name' => 'create artikel']);
        //     $permission = Permission::create(['name' => 'create kegiatan']);
        //     $permission = Permission::create(['name' => 'create lowongan kerja']);
        //     $permission = Permission::create(['name' => 'create kuisioner']);

        //     $permission = Permission::create(['name' => 'update data alumni']);
        //     $permission = Permission::create(['name' => 'update berita']);
        //     $permission = Permission::create(['name' => 'update artikel']);
        //     $permission = Permission::create(['name' => 'update kegiatan']);
        //     $permission = Permission::create(['name' => 'update lowongan kerja']);
        //     $permission = Permission::create(['name' => 'update kuisioner']);

        //     $permission = Permission::create(['name' => 'delete data alumni']);
        //     $permission = Permission::create(['name' => 'delete berita']);
        //     $permission = Permission::create(['name' => 'delete artikel']);
        //     $permission = Permission::create(['name' => 'delete kegiatan']);
        //     $permission = Permission::create(['name' => 'delete lowongan kerja']);
        //     $permission = Permission::create(['name' => 'delete kuisioner']);

        //     $role_admin->givePermissionTo(['create data alumni', 'update data alumni', 'delete data alumni', 'create berita', 'update berita', 'delete berita', 'create artikel', 'update artikel', 'delete artikel','create kegiatan', 'update kegiatan', 'delete kegiatan', 'create lowongan kerja', 'update lowongan kerja', 'delete lowongan kerja', 'create kuisioner', 'update kuisioner', 'delete kuisioner']);
        //     $role_dosen->givePermissionTo(['create berita', 'update berita', 'delete berita', 'create artikel', 'update artikel', 'delete artikel','create kegiatan', 'update kegiatan', 'delete kegiatan', 'create lowongan kerja', 'update lowongan kerja', 'delete lowongan kerja', 'create kuisioner', 'update kuisioner', 'delete kuisioner']);
        //     $role_alumni->givePermissionTo(['create artikel', 'update artikel', 'delete artikel', 'create kegiatan', 'update kegiatan', 'delete kegiatan', 'create lowongan kerja', 'update lowongan kerja', 'delete lowongan kerja']);
        //     $role_mahasiswa->givePermissionTo(['create artikel', 'update artikel', 'delete artikel']);

        //     $admin->assignRole('admin');
        //     $dosen->assignRole('dosen');
        //     $alumni->assignRole('alumni');
        //     $mahasiswa->assignRole('mahasiswa');

        //     DB::commit();
        // } catch (\Throwable $th) {
        //     DB::rollBack();
        // }

    }
}
