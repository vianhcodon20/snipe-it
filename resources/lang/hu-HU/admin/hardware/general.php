<?php

return [
    'about_assets_title'           => 'Az eszközökről',
    'about_assets_text'            => 'Az eszközök a sorszám vagy az eszközcímke által követett elemek. Ezek általában magasabb értékű termékek, amelyekben egy adott elem azonosítása fontos.',
    'archived'  				=> 'Arhivált',
    'asset'  					=> 'Eszköz',
    'bulk_checkout'             => 'Eszközök kiadása',
    'bulk_checkin'              => 'Eszköz visszavétele',
    'checkin'  					=> 'Eszköz visszavétele',
    'checkout'  				=> 'Checkout Asset',
    'clone'  					=> 'Eszköz klónozása',
    'deployable'  				=> 'Kiadható',
    'deleted'  					=> 'Az eszköz törölve lett.',
    'delete_confirm'            => 'Biztosan törölni akarja ezt az eszközt?',
    'edit'  					=> 'Eszköz módosítása',
    'model_deleted'  			=> 'Ennek az eszköznek a modellje törölve lett. Elösszőr a modellt vissza kell állítani, utánna lehet csak az eszközt visszaállítani.',
    'model_invalid'             => 'Ennek az eszköznek a modellje érvénytelen.',
    'model_invalid_fix'         => 'The asset must be updated use a valid asset model before attempting to check it in or out, or to audit it.',
    'requestable'               => 'lehívási',
    'requested'				    => 'Kérve',
    'not_requestable'           => 'Nem kérhető',
    'requestable_status_warning' => 'Ne változtassa meg az igényelhető státuszt',
    'restore'  					=> 'Visszaállítás eszköz',
    'pending'  					=> 'Függőben',
    'undeployable'  			=> 'Nem telepíthető',
    'undeployable_tooltip'  	=> 'Az eszköz jelenleg az állapotcímkéje szerint nem helyezhezhető üzembe és nem adható ki.',
    'view'  					=> 'Eszköz megtekintése',
    'csv_error' => 'Hiba van a CSV fájlban:',
    'import_text' => '<p>Upload a CSV that contains asset history. The assets and users MUST already exist in the system, or they will be skipped. Matching assets for history import happens against the asset tag. We will try to find a matching user based on the user\'s name you provide, and the criteria you select below. If you do not select any criteria below, it will simply try to match on the username format you configured in the <code>Admin &gt; General Settings</code>.</p><p>Fields included in the CSV must match the headers: <strong>Asset Tag, Name, Checkout Date, Checkin Date</strong>. Any additional fields will be ignored. </p><p>Checkin Date: blank or future checkin dates will checkout items to associated user.  Excluding the Checkin Date column will create a checkin date with todays date.</p>
    ',
    'csv_import_match_f-l' => 'Try to match users by <strong>firstname.lastname</strong> (<code>jane.smith</code>) format',
    'csv_import_match_initial_last' => 'Try to match users by <strong>first initial last name</strong> (<code>jsmith</code>) format',
    'csv_import_match_first' => 'Try to match users by <strong>first name</strong> (<code>jane</code>) format',
    'csv_import_match_email' => 'Try to match users by <strong>email</strong> as username',
    'csv_import_match_username' => 'Try to match users by <strong>username</strong>',
    'error_messages' => 'Hibaüzenetek:',
    'success_messages' => 'Sikeres üzenetek:',
    'alert_details' => 'A részleteket lásd alább.',
    'custom_export' => 'Egyéni export',
    'mfg_warranty_lookup' => ':manufacturer jótállási információk ellenőrzése',
    'user_department' => 'Felhasználó osztálya',
];