<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */
    'phone' => ':attribute ফিল্ডে একটি ভুল নাম্বার রয়েছে ।',
    'accepted' => ':attribute গ্রহণ করা আবশ্যক।',
    'active_url' => ':attribute বৈধ URL নয়।',
    'after' => ':attribute-এর পর তারিখ থাকতে হবে :date.',
    'after_or_equal' => ':attribute-এ পরে অথবা সমান একটি তারিখ থাকতে হবে :date.',
    'alpha' => ':attribute-এ শুধুমাত্র লেটার থাকতে পারে।',
    'alpha_dash' => ':attribute-এ শুধুমাত্র লেটার, নম্বর, ড্যাশ এবং আন্ডারস্কোর থাকতে পারে।',
    'alpha_num' => ':attribute-এ শুধুমাত্র লেটার ও নম্বর থাকতে পারে।',
    'array' => ':attribute একটি সিরিয়ালে হতে হবে ',
    'before' => ':attribute-এ আগের তারিখ থাকতে হবে :date.',
    'before_or_equal' => ':attribute-এ আগের অথবা সমান একটি তারিখ থাকতে হবে :date.',
    'between' => [
        'numeric' => ':attribute অবশ্যই :min ও :max এর মধ্যে হতে হবে।',
        'file' => ':attribute অবশ্যই :min ও :max kilobyte-এর মধ্যে হতে হবে৷',
        'string' => ':attribute অবশ্যই :min ও :max ক্যারেক্টারের মধ্যে হতে হবে৷',
        'array' => ':attribute অবশ্যই :min ও :max আইটেমের মধ্যে হতে হবে',
    ],
    'boolean' => ':attribute ফিল্ড সত্য বা মিথ্যা হতে হবে।',
    'confirmed' => ':attribute কনফরমেশন মেলেনি।',
    'date' => ':attribute তারিখ বৈধ নয়।',
    'date_equals' => ':attribute একটি তারিখের সমান হতে হবে :date.',
    'date_format' => ':attribute format :format-এর সাথে মেলেনি। ',
    'different' => ':attribute এবং :other ভিন্ন হতে হবে।',
    'digits' => ':attribute হতে হবে :digits digits.',
    'digits_between' => ':attribute অবশ্যই :min ও :max digits-এর মধ্যে হতে হবে৷',
    'dimensions' => ':attribute-এর ছবির ডায়মেনশন বৈধ নয়।',
    'distinct' => ':attribute ফিল্ডের duplicate value আছে। ',
    'email' => ':attribute-এ একটি বৈধ ইমেইল ঠিকানা হতে হবে। ',
    'ends_with' => ':attribute নিম্নলিখিত একটি দিয়ে শেষ হতে হবে: :values.',
    'exists' => ':attribute বৈধ নয়',
    'file' => ':attribute একটি ফাইলে হতে হবে।',
    'filled' => ':attribute ফিল্ডের একটি মান থাকতে হবে।',
    'gt' => [
        'numeric' => ':attribute :value-এর থেকে বড় হতে হবে। ',
        'file' => ':attribute :value kilobyte-এর চেয়ে বেশি হতে হবে। ',
        'string' => ':attribute :value character-এর চেয়ে বড় হতে হবে। ',
        'array' => ':attribute-এর চেয়ে বেশি থাকতে হবে :value items।',
    ],
    'gte' => [
        'numeric' => ':attribute-এর চেয়ে বড় বা সমান হতে হবে :value.',
        'file' => ':attribute-এর চেয়ে বড় বা সমান হতে হবে :value kilobytes.',
        'string' => ':attribute-এর চেয়ে বড় বা সমান হতে হবে :value characters.',
        'array' => ':attribute-এ থাকতে হবে :value items অথবা বেশি.',
    ],
    'image' => ':attribute-এর ছবি থাকতে হবে।',
    'in' => ':attribute বৈধ নয়।',
    'in_array' => ':attribute ফিল্ড :other-এর মধ্যে বিদ্যমান নেই ',
    'integer' => ':attribute একটি পূর্ণসংখ্যা হতে হবে।',
    'ip' => ':attribute একটি বৈধ IP ঠিকানা হতে হবে।',
    'ipv4' => ':attribute একটি বৈধ IPv4 ঠিকানা হতে হবে।',
    'ipv6' => ':attribute একটি বৈধ IPv6 ঠিকানা হতে হবে।',
    'json' => ':attribute বৈধ JSON স্ট্রিং হতে হবে',
    'lt' => [
        'numeric' => ':attribute :value-এর চেয়ে কম হতে হবে।',
        'file' => ':attribute :value kilobytes-এর চেয়ে কম হতে হবে।',
        'string' => ':attribute :value characters-এর চেয়ে কম হতে হবে ',
        'array' => ':attribute :value items-এর চেয়ে কম হতে হবে।',
    ],
    'lte' => [
        'numeric' => ':attribute :value-এর চেয়ে কম বা সমান হতে হবে.',
        'file' => ':attribute :value kilobytes-এর চেয়ে কম বা সমান হতে হবে।',
        'string' => ':attribute :value characters-এর চেয়ে কম বা সমান হতে হবে .',
        'array' => ':attribute :value items-চেয়ে বেশি থাকতে হবে না। ',
    ],
    'max' => [
        'numeric' => ':attribute :max-এর থেকে বেশি নাও হতে পারে। ',
        'file' => ':attribute :max kilobytes-এর থেকে বেশি নাও হতে পারে।',
        'string' => ':attribute :max characters-এর থেকে বেশি নাও হতে পারে।',
        'array' => ':attribute :max items-এর থেকে বেশি নাও হতে পারে।',
    ],
    'mimes' => ':attribute ফাইল টাইপ হতে হবে: :values.',
    'mimetypes' => ':attribute ফাইল টাইপ হতে হবে: :values.',
    'min' => [
        'numeric' => ':attribute কমপক্ষে হতে হবে :min.',
        'file' => ':attribute কমপক্ষে হতে হবে :min kilobytes.',
        'string' => ':attribute কমপক্ষে হতে হবে :min characters.',
        'array' => ':attribute কমপক্ষে হতে হবে :min items.',
    ],
    'not_in' => ':attribute বৈধ নয়।',
    'not_regex' => ':attribute ফরমেট বৈধ নয়',
    'numeric' => ':attribute একটি সংখ্যা হতে হবে।',
    'password' => 'পাসওয়ার্ডটি ভুল।',
    'present' => ':attribute ফিল্ড উপস্থিত থাকতে হবে।',
    'regex' => ':attribute ফরমেটটি বৈধ নয়।',
    'required' => ':attribute ফিল্ড প্রয়োজন।',
    'required_if' => ':attribute ফিল্ড প্রয়োজন যখন :other হলো :value',
    'required_unless' => ':attribute ফিল্ড প্রয়োজন যদি না :other-এর মধ্যে :valuesথাকে।',
    'required_with' => ':attribute ফিল্ড প্রয়োজন হয় যখন :values উপস্থিত থাকে। ',
    'required_with_all' => ':attribute ফিল্ড প্রয়োজন হয় যখন :values উপস্থিত থাকে।',
    'required_without' => ':attribute ফিল্ড প্রয়োজন হয় যখন :values উপস্থিত না থাকে।',
    'required_without_all' => ':attribute ফিল্ড প্রয়োজন হয় যখন কোনো :values উপস্থিত থাকে না। ',
    'same' => ':attribute এবং :other অবশ্যই মিলতে হবে। ',
    'size' => [
        'numeric' => ':attribute হতে হবে :size.',
        'file' => ':attribute হতে হবে :size kilobytes.',
        'string' => ':attribute হতে হবে :size characters.',
        'array' => ':attribute হতে হবে :size items.',
    ],
    'starts_with' => ':attribute নিম্নলিখিত একটি দিয়ে শুরু করা আবশ্যক: :values.',
    'string' => ':attribute স্ট্রিং হতে হবে।',
    'timezone' => ':attribute অবশ্যই একটি বৈধ জোন হতে হবে।',
    'unique' => ':attribute ইতোমধ্যে নেওয়া হয়েছে ',
    'uploaded' => ':attribute আপলোড হতে ব্যর্থ হয়েছে.',
    'url' => ':attribute ফরম্যাট বৈধ নয়',
    'uuid' => ':attribute একটি বৈধ UUID হতে হবে। ',


    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [

        'dob' => [
            'date_format' => 'তারিখ yyyy-mm-dd ফরম্যাটের সাথে মেলে না।',
        ],

        'mobile' => [
            'invalid_format' => 'কনটাক্ট নম্বরের ফরম্যাট অবৈধ ',
        ],

        'no_numeric' => 'কোনো সংখ্যাজাতীয় (0-৯) মান থাকতে পারে না',
        'incorrect_password' => 'বর্তমান পাসওয়ার্ডটি সঠিক নয়।',

    ],


    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

    'name_required' => 'নাম লিখুন',
    'name_not_in' => 'নাম বৈধ নয়',
    'mobile_number_required' => 'মোবাইল নম্বর লিখুন',
    'address_required' => 'ঠিকানা লিখুন',
    'mobile_number_unique' => 'মোবাইল নম্বর আগে থেকেই আছে',
    'month_required' => 'মাস প্রয়োজন',
    'year_required' => 'বছর প্রয়োজন',
    'date_required' => 'তারিখ দিন',
];
