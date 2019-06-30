<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Entity\Adverts\Advert{
/**
 * App\Entity\Adverts\Advert\Advert
 *
 * @property int $id
 * @property int $user_id
 * @property int $category_id
 * @property int $region_id
 * @property string $title
 * @property string $content
 * @property int $price
 * @property string $address
 * @property string $status
 * @property string $reject_reason
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property Carbon $published_at
 * @property Carbon $expires_at
 * @property User $user
 * @property Region $region
 * @property Category $category
 * @property Value[] $values
 * @property Photo[] $photos
 * @method Builder active()
 * @method Builder forUser(User $user)
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Entity\User\User[] $favorites
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Adverts\Advert\Advert favoredByUser(\App\Entity\User\User $user)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Adverts\Advert\Advert forCategory(\App\Entity\Adverts\Category $category)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Adverts\Advert\Advert forRegion(\App\Entity\Region $region)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Adverts\Advert\Advert newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Adverts\Advert\Advert newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Adverts\Advert\Advert query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Adverts\Advert\Advert whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Adverts\Advert\Advert whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Adverts\Advert\Advert whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Adverts\Advert\Advert whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Adverts\Advert\Advert whereExpiresAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Adverts\Advert\Advert whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Adverts\Advert\Advert wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Adverts\Advert\Advert wherePublishedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Adverts\Advert\Advert whereRegionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Adverts\Advert\Advert whereRejectReason($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Adverts\Advert\Advert whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Adverts\Advert\Advert whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Adverts\Advert\Advert whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Adverts\Advert\Advert whereUserId($value)
 */
	class Advert extends \Eloquent {}
}

namespace App\Entity\Adverts\Advert{
/**
 * App\Entity\Adverts\Advert\Photo
 *
 * @property int $id
 * @property string file
 * @property int $advert_id
 * @property string $file
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Adverts\Advert\Photo newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Adverts\Advert\Photo newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Adverts\Advert\Photo query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Adverts\Advert\Photo whereAdvertId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Adverts\Advert\Photo whereFile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Adverts\Advert\Photo whereId($value)
 */
	class Photo extends \Eloquent {}
}

namespace App\Entity\Adverts\Advert{
/**
 * App\Entity\Adverts\Advert\Value
 *
 * @property int $attribute_id
 * @property string $value
 * @property int $advert_id
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Adverts\Advert\Value newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Adverts\Advert\Value newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Adverts\Advert\Value query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Adverts\Advert\Value whereAdvertId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Adverts\Advert\Value whereAttributeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Adverts\Advert\Value whereValue($value)
 */
	class Value extends \Eloquent {}
}

namespace App\Entity\Adverts{
/**
 * App\Entity\Adverts\Attribute
 *
 * @property int $id
 * @property int $category_id
 * @property string $name
 * @property string $type
 * @property string $default
 * @property boolean $required
 * @property array $variants
 * @property integer $sort
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Adverts\Attribute newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Adverts\Attribute newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Adverts\Attribute query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Adverts\Attribute whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Adverts\Attribute whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Adverts\Attribute whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Adverts\Attribute whereRequired($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Adverts\Attribute whereSort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Adverts\Attribute whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Adverts\Attribute whereVariants($value)
 */
	class Attribute extends \Eloquent {}
}

namespace App\Entity\Adverts{
/**
 * App\Entity\Adverts\Category
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property int|null $parent_id
 * @property int $depth
 * @property Category $parent
 * @property Category[] $children
 * @property \App\Entity\Adverts\Attribute $attributes
 * @property int $_lft
 * @property int $_rgt
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Adverts\Category d()
 * @method static \Kalnoy\Nestedset\QueryBuilder|\App\Entity\Adverts\Category newModelQuery()
 * @method static \Kalnoy\Nestedset\QueryBuilder|\App\Entity\Adverts\Category newQuery()
 * @method static \Kalnoy\Nestedset\QueryBuilder|\App\Entity\Adverts\Category query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Adverts\Category whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Adverts\Category whereLft($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Adverts\Category whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Adverts\Category whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Adverts\Category whereRgt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Adverts\Category whereSlug($value)
 */
	class Category extends \Eloquent {}
}

namespace App\Entity\Banner{
/**
 * App\Entity\Banner\Banner
 *
 * @property int $id
 * @property int $user_id
 * @property int $category_id
 * @property int $region_id
 * @property string $name
 * @property int $views
 * @property int $limit
 * @property int $clicks
 * @property int $cost
 * @property string $url
 * @property string $format
 * @property string $file
 * @property string $status
 * @property Carbon $published_at
 * @property Region|null $region
 * @property Category $category
 * @method Builder active()
 * @method Builder forUser(User $user)
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Entity\User\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Banner\Banner newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Banner\Banner newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Banner\Banner query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Banner\Banner whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Banner\Banner whereClicks($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Banner\Banner whereCost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Banner\Banner whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Banner\Banner whereFile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Banner\Banner whereFormat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Banner\Banner whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Banner\Banner whereLimit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Banner\Banner whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Banner\Banner wherePublishedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Banner\Banner whereRegionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Banner\Banner whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Banner\Banner whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Banner\Banner whereUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Banner\Banner whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Banner\Banner whereViews($value)
 */
	class Banner extends \Eloquent {}
}

namespace App\Entity{
/**
 * App\Entity\Region
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property int|null $parent_id
 * @property Region $parent
 * @property Region[] $children
 * @method Builder roots()
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Region newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Region newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Region query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Region whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Region whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Region whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Region whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Region whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Region whereUpdatedAt($value)
 */
	class Region extends \Eloquent {}
}

namespace App\Entity\User{
/**
 * App\Entity\User\Network
 *
 * @property int $user_id
 * @property string $network
 * @property string $identity
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\User\Network newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\User\Network newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\User\Network query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\User\Network whereIdentity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\User\Network whereNetwork($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\User\Network whereUserId($value)
 */
	class Network extends \Eloquent {}
}

namespace App\Entity\User{
/**
 * App\Entity\User\User
 *
 * @property int $id
 * @property string $name
 * @property string $last_name
 * @property string $email
 * @property string $phone
 * @property bool $phone_verified
 * @property boolean $phone_auth
 * @property string $password
 * @property string $verify_token
 * @property string $phone_verify_token
 * @property Carbon $phone_verify_token_expire
 * @property string $role
 * @property string $status
 * @property Network[] networks
 * @method Builder byNetwork(string $network, string $identity)
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Entity\Adverts\Advert\Advert[] $favorites
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Entity\User\Network[] $networks
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\User\User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\User\User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\User\User query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\User\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\User\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\User\User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\User\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\User\User whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\User\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\User\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\User\User wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\User\User wherePhoneAuth($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\User\User wherePhoneVerified($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\User\User wherePhoneVerifyToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\User\User wherePhoneVerifyTokenExpire($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\User\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\User\User whereRole($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\User\User whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\User\User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\User\User whereVerifyToken($value)
 */
	class User extends \Eloquent {}
}

