<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Donatur
 *
 * @property int $id
 * @property string|null $nama
 * @property string|null $alamat
 * @property string|null $email
 * @property string|null $no_telp
 * @property int $jumlah
 * @property string|null $pesan
 * @property int $anonim
 * @property int $validated
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\ValidasiDonasi|null $validasidonasi
 * @method static \Database\Factories\DonaturFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Donatur newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Donatur newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Donatur query()
 * @method static \Illuminate\Database\Eloquent\Builder|Donatur whereAlamat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Donatur whereAnonim($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Donatur whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Donatur whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Donatur whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Donatur whereJumlah($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Donatur whereNama($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Donatur whereNoTelp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Donatur wherePesan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Donatur whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Donatur whereValidated($value)
 */
	class Donatur extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Gambar
 *
 * @property int $id
 * @property string $nama_gambar
 * @property string $nama_file
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Gambar newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Gambar newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Gambar query()
 * @method static \Illuminate\Database\Eloquent\Builder|Gambar whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gambar whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gambar whereNamaFile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gambar whereNamaGambar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gambar whereUpdatedAt($value)
 */
	class Gambar extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Rekening
 *
 * @property int $id
 * @property string $nama
 * @property string $jenis
 * @property string|null $no_rekening
 * @property string $atas_nama
 * @property int $saldo
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Rekening newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Rekening newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Rekening query()
 * @method static \Illuminate\Database\Eloquent\Builder|Rekening whereAtasNama($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rekening whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rekening whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rekening whereJenis($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rekening whereNama($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rekening whereNoRekening($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rekening whereSaldo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rekening whereUpdatedAt($value)
 */
	class Rekening extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Settings
 *
 * @property int $id
 * @property int $target
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Settings newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Settings newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Settings query()
 * @method static \Illuminate\Database\Eloquent\Builder|Settings whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Settings whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Settings whereTarget($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Settings whereUpdatedAt($value)
 */
	class Settings extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ValidasiDonasi
 *
 * @property int $id
 * @property string $id_rekening
 * @property string|null $file
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ValidasiDonasi newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ValidasiDonasi newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ValidasiDonasi query()
 * @method static \Illuminate\Database\Eloquent\Builder|ValidasiDonasi whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ValidasiDonasi whereFile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ValidasiDonasi whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ValidasiDonasi whereIdRekening($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ValidasiDonasi whereUpdatedAt($value)
 */
	class ValidasiDonasi extends \Eloquent {}
}

