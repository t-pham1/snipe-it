<?php

return array(

    'does_not_exist' => 'License does not exist or you do not have permission to view it.',
    'user_does_not_exist' => 'المستخدم غير موجود.',
    'asset_does_not_exist' 	=> 'الأصل اللذي تحاول ربطه مع هذا الترخيص غير موجود.',
    'owner_doesnt_match_asset' => 'الأصل اللذي تحاول ربطه مع هذا الترخيص حاليا مملوك لشخص اخر غير اللذي تم اختياره من القائمة المنسدلة.',
    'assoc_users'	 => 'هذا الترخيص حاليا مخرج لمستخدم ولا يمكن حذفه. يرجى التحقق من الترخيص في البداية، ثم محاولة الحذف مرة أخرى. ',
    'select_asset_or_person' => 'يجب تحديد أصل أو مستخدم، وليس كليهما.',
    'not_found' => 'لم يتم العثور على الترخيص',
    'seats_available' => ':seat_count seats available',


    'create' => array(
        'error'   => 'لم يتم إنشاء الترخيص، يرجى إعادة المحاولة.',
        'success' => 'تم إنشاء الترخيص بنجاح.'
    ),

    'deletefile' => array(
        'error'   => 'لم يتم حذف الملف. الرجاء المحاولة مرة اخرى.',
        'success' => 'تم حذف الملف بنجاح.',
    ),

    'upload' => array(
        'error'   => 'لم يتم تحميل الملف(ات). حاول مرة اخرى.',
        'success' => 'تم تحميل الملف(ات) بنجاح.',
        'nofiles' => 'لم تحدد أي ملفات للتحميل، أو أن الملف الذي تحاول تحميله كبير جدا',
        'invalidfiles' => 'واحد أو أكثر من الملفات كبير جدا أو انه نوع ملف غير مسموح به. أنواع الملفات المسموح بها هي png, gif, jpg, jpeg, doc, docx, pdf, txt, zip, rar, rtf, xml, و lic.',
    ),

    'update' => array(
        'error'   => 'لم يتم تحديث الترخيص، يرجى إعادة المحاولة',
        'success' => 'تم تحديث الترخيص بنجاح.'
    ),

    'delete' => array(
        'confirm'   => 'هل أنت متأكد من رغبتك في حذف هذا الترخيص؟',
        'error'   => 'حدثت مشكلة أثناء حذف الترخيص. يرجى إعادة المحاولة.',
        'success' => 'تم حذف الترخيص بنجاح.'
    ),

    'checkout' => array(
        'error'   => 'حدثت مشكلة أثناء اخراج الترخيص. يرجى إعادة المحاولة.',
        'success' => 'تم اخراج الترخيص بنجاح',
        'not_enough_seats' => 'Not enough license seats available for checkout',
    ),

    'checkin' => array(
        'error'   => 'حدثت مشكلة في التحقق من الترخيص. يرجى إعادة المحاولة.',
        'success' => 'تم ادخال الترخيص بنجاح'
    ),

);
