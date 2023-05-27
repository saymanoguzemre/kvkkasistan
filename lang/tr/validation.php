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

    'accepted' => ':attribute alanı kabul edilmelidir.',
    'accepted_if' => ':attribute alanı :other :value olduğunda kabul edilmelidir.',
    'active_url' => ':attribute alanı geçerli bir URL olmalıdır.',
    'after' => ':attribute alanı :date tarihinden sonra bir tarih olmalıdır.',
    'after_or_equal' => ':attribute alanı :date tarihinden sonra veya aynı tarih olmalıdır.',
    'alpha' => ':attribute alanı sadece harfler içerebilir.',
    'alpha_dash' => ':attribute alanı sadece harfler, sayılar, tire ve alt çizgi içerebilir.',
    'alpha_num' => ':attribute alanı sadece harfler ve sayılar içerebilir.',
    'array' => ':attribute alanı bir dizi olmalıdır.',
    'ascii' => ':attribute alanı sadece tek baytlı alfasayısal karakterler ve semboller içerebilir.',
    'before' => ':attribute alanı :date tarihinden önce bir tarih olmalıdır.',
    'before_or_equal' => ':attribute alanı :date tarihinden önce veya aynı tarih olmalıdır.',
    'between' => [
        'array' => ':attribute alanı :min ve :max öğesi arasında olmalıdır.',
        'file' => ':attribute alanı :min ve :max kilobayt arasında olmalıdır.',
        'numeric' => ':attribute alanı :min ve :max arasında olmalıdır.',
        'string' => ':attribute alanı :min ve :max karakter arasında olmalıdır.',
    ],
    'boolean' => ':attribute alanı evet veya hayır olmalıdır.',
    'confirmed' => ':attribute alanı tekrarı ile eşleşmiyor.',
    'current_password' => 'Şifre yanlış.',
    'date' => ':attribute alanı geçerli bir tarih olmalıdır.',
    'date_equals' => ':attribute alanı :date ile aynı tarih olmalıdır.',
    'date_format' => ':attribute alanı :format formatına uygun olmalıdır.',
    'decimal' => ':attribute alanı :decimal ondalık basamağa sahip olmalıdır.',
    'declined' => ':attribute alanı reddedilmelidir.',
    'declined_if' => ':other :value olduğunda :attribute alanı reddedilmelidir.',
    'different' => ':attribute alanı ile :other farklı olmalıdır.',
    'digits' => ':attribute alanı :digits rakamdan oluşmalıdır.',
    'digits_between' => ':attribute alanı :min ile :max arasında rakam içermelidir.',
    'dimensions' => ':attribute alanı geçersiz görüntü boyutlarına sahiptir.',
    'distinct' => ':attribute alanı tekrarlanan bir değere sahiptir.',
    'doesnt_end_with' => ':attribute alanı aşağıdakilerden biriyle bitmemelidir: :values.',
    'doesnt_start_with' => ':attribute alanı şu değerlerden biriyle başlamamalıdır: :values.',
    'email' => ':attribute alanı geçerli bir e-posta adresi olmalıdır.',
    'ends_with' => ':attribute alanı şu değerlerden biriyle bitmelidir: :values.',
    'enum' => 'Seçilen :attribute geçersizdir.',
    'exists' => 'Seçilen :attribute geçersizdir.',
    'file' => ':attribute alanı bir dosya olmalıdır.',
    'filled' => ':attribute alanı bir değer içermelidir.',
    'gt' => [
    'array' => ':attribute alanı :value öğeden fazla olmalıdır.',
    'file' => ':attribute alanı :value kilobayttan büyük olmalıdır.',
    'numeric' => ':attribute alanı :value değerinden büyük olmalıdır.',
    'string' => ':attribute alanı :value karakterden büyük olmalıdır.',
    ],
    'gte' => [
    'array' => ':attribute alanı :value öğe veya daha fazla olmalıdır.',
    'file' => ':attribute alanı :value kilobayt veya daha büyük olmalıdır.',
    'numeric' => ':attribute alanı :value değerinden büyük veya eşit olmalıdır.',
    'string' => ':attribute alanı :value karakterden büyük veya eşit olmalıdır.',
    ],
    'image' => ':attribute alanı bir resim olmalıdır.',
    'in' => 'Seçilen :attribute geçersizdir.',
    'in_array' => ':attribute alanı :other içinde mevcut olmalıdır.',
    'integer' => ':attribute alanı bir tam sayı olmalıdır.',
    'ip' => ':attribute alanı geçerli bir IP adresi olmalıdır.',
    'ipv4' => ':attribute alanı geçerli bir IPv4 adresi olmalıdır.',
    'ipv6' => ':attribute alanı geçerli bir IPv6 adresi olmalıdır.',
    'json' => ':attribute alanı geçerli bir JSON dizesi olmalıdır.',
    'lowercase' => ':attribute alanı küçük harf olmalıdır.',
    'lt' => [
        'numeric' => ':attribute, :value değerinden daha küçük olmalıdır.',
        'file'    => ':attribute, :value kilobayt değerinden daha küçük olmalıdır.',
        'string'  => ':attribute, :value karakterden daha kısa olmalıdır.',
        'array'   => ':attribute, :value elemandan daha azına sahip olmalıdır.',
    ],
    'lte' => [
        'numeric' => ':attribute, :value veya daha küçük bir değerde olmalıdır.',
        'file'    => ':attribute, :value veya daha küçük kilobaytta olmalıdır.',
        'string'  => ':attribute, :value veya daha az karakterden oluşmalıdır.',
        'array'   => ':attribute, :value veya daha az elemana sahip olmalıdır.',
    ],
    'mac_address' => ':attribute alanı geçerli bir MAC adresi olmalıdır.',
    'max' => [
        'numeric' => ':attribute değeri :max değerinden büyük olmamalıdır.',
        'file'    => ':attribute değeri :max kilobayt değerinden büyük olmamalıdır.',
        'string'  => ':attribute değeri en fazla :max karakter uzunluğunda olmalıdır.',
        'array'   => ':attribute değeri :max adedinden fazla nesneye sahip olmamalıdır.',
    ],
    'max_digits' => ':attribute alanı en fazla :max rakam içerebilir.',
    'mimes' => ':attribute dosya biçimi :values olmalıdır.',
    'mimetypes'  => ':attribute dosya biçimi :values olmalıdır.',
    'min'   => [
        'numeric' => ':attribute değeri en az :min değerinde olmalıdır.',
        'file'    => ':attribute değeri en az :min kilobayt değerinde olmalıdır.',
        'string'  => ':attribute değeri en az :min karakter uzunluğunda olmalıdır.',
        'array'   => ':attribute en az :min nesneye sahip olmalıdır.',
    ],
    'min_digits' => ':attribute alanı en az :min rakam içermelidir.',
    'missing' => ':attribute alanı eksik olmalıdır.',
    'missing_if' => ':other değeri :value olduğunda :attribute alanı eksik olmalıdır.',
    'missing_unless' => ':other değeri :value olmadığında :attribute alanı eksik olmalıdır.',
    'missing_with' => ':values varken :attribute alanı eksik olmalıdır.',
    'missing_with_all' => ':values varken :attribute alanı eksik olmalıdır.',
    'multiple_of' => ':attribute alanı :value sayısının katı olmalıdır.',
    'not_in' => 'Seçilen :attribute geçersizdir.',
    'not_regex' => ':attribute alanı biçimi geçersizdir.',
    'numeric' => ':attribute alanı bir sayı olmalıdır.',
    'password' => [
        'letters' => ':attribute alanı en az bir harf içermelidir.',
        'mixed' => ':attribute alanı en az bir büyük ve bir küçük harf içermelidir.',
        'numbers' => ':attribute alanı en az bir sayı içermelidir.',
        'symbols' => ':attribute alanı en az bir sembol içermelidir.',
        'uncompromised' => ':attribute verilen veri sızıntısında göründü. Lütfen farklı bir :attribute seçin.',
        ],
        'present' => ':attribute alanı mevcut olmalıdır.',
        'prohibited' => ':attribute alanı yasaktır.',
        'prohibited_if' => ':other :value olduğunda :attribute alanı yasaktır.',
        'prohibited_unless' => ':other :values içinde olmadıkça :attribute alanı yasaktır.',
        'prohibits' => ':attribute alanı, :other varken mevcut olamaz.',
        'regex' => ':attribute alanı formatı geçersiz.',
        'required' => ':attribute alanı gereklidir.',
        'required_array_keys' => ':attribute alanı için girdiler içermelidir: :values.',
        'required_if' => ':other :value olduğunda :attribute alanı gereklidir.',
        'required_if_accepted' => ':other kabul edildiğinde :attribute alanı gereklidir.',
        'required_unless' => ':other :values içinde olmadıkça :attribute alanı gereklidir.',
        'required_with' => ':values mevcut olduğunda :attribute alanı gereklidir.',
        'required_with_all' => ':values mevcut olduğunda :attribute alanı gereklidir.',
        'required_without' => ':values mevcut olmadığında :attribute alanı gereklidir.',
        'required_without_all' => ':values hiçbirinde mevcut olmadığında :attribute alanı gereklidir.',
        'same' => ':attribute alanı, :other ile eşleşmelidir.',
    'size'                 => [
        'numeric' => ':attribute :size olmalıdır.',
        'file'    => ':attribute :size kilobayt olmalıdır.',
        'string'  => ':attribute :size karakter olmalıdır.',
        'array'   => ':attribute :size nesneye sahip olmalıdır.',
    ],
    'starts_with' => ':attribute şunlardan biri ile başlamalıdır: :values.',
    'string'   => ':attribute karakterlerden oluşmalıdır.',
    'timezone' => ':attribute geçerli bir zaman bölgesi olmalıdır.',
    'unique'   => ':attribute daha önceden kayıt edilmiş.',
    'uploaded' => ':attribute yüklenirken hata oluştu.',
    'uppercase' => ':attribute alanı büyük harf olmalıdır.',
    'url'       => ':attribute biçimi geçersiz.',
    'ulid'      => ':attribute geçerli bir ULID olmalıdır.',
    'uuid'      => ':attribute geçerli bir UUID olmalıdır.',

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
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
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

];
