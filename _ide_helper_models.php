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
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Adverts\Advert\Advert forCategory(\App\Entity\Adverts\Category $category)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Adverts\Advert\Advert forRegion(\App\Entity\Region $region)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Adverts\Advert\Advert newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Adverts\Advert\Advert newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Adverts\Advert\Advert query()
 */
	class Advert extends \Eloquent {}
}

namespace App\Entity\Adverts\Advert{
/**
 * App\Entity\Adverts\Advert\Photo
 *
 * @property int $id
 * @property string file
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Adverts\Advert\Photo newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Adverts\Advert\Photo newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Adverts\Advert\Photo query()
 */
	class Photo extends \Eloquent {}
}

namespace App\Entity\Adverts\Advert{
/**
 * App\Entity\Adverts\Advert\Value
 *
 * @property int $attribute_id
 * @property string $value
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Adverts\Advert\Value newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Adverts\Advert\Value newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Adverts\Advert\Value query()
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
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Adverts\Category d()
 * @method static \Kalnoy\Nestedset\QueryBuilder|\App\Entity\Adverts\Category newModelQuery()
 * @method static \Kalnoy\Nestedset\QueryBuilder|\App\Entity\Adverts\Category newQuery()
 * @method static \Kalnoy\Nestedset\QueryBuilder|\App\Entity\Adverts\Category query()
 */
	class Category extends \Eloquent {}
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
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Region newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Region newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Region query()
 */
	class Region extends \Eloquent {}
}

namespace App\Entity{
/**
 * App\Entity\User
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
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\User query()
 */
	class User extends \Eloquent {}
}

