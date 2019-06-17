<?php

use App\Entity\Adverts\Advert\Advert;
use App\Entity\Adverts\Attribute;
use App\Entity\Region;
use App\Entity\Adverts\Category;
use DaveJamesMiller\Breadcrumbs\BreadcrumbsGenerator as Crumbs;
use App\Entity\User;

Breadcrumbs::for('home', function (Crumbs $crumbs) {
    $crumbs->push('Home', route('home'));
});

Breadcrumbs::for('login', function (Crumbs $crumbs) {
    $crumbs->parent('home');
    $crumbs->push('Login', route('login'));
});

Breadcrumbs::for('login.phone', function (Crumbs $crumbs) {
    $crumbs->parent('home');
    $crumbs->push('Login', route('login.phone'));
});

Breadcrumbs::for('register', function (Crumbs $crumbs) {
    $crumbs->parent('home');
    $crumbs->push('Register', route('register'));
});

Breadcrumbs::for('password.request', function (Crumbs $crumbs) {
    $crumbs->parent('login');
    $crumbs->push('Reset Password', route('password.request'));
});

Breadcrumbs::for('password.reset', function (Crumbs $crumbs) {
    $crumbs->parent('password.request');
    $crumbs->push('Change', route('password.reset'));
});

// Adverts

Breadcrumbs::for('adverts.inner_region', function (Crumbs $crumbs, Region $region = null, Category $category = null) {
    if ($region && $parent = $region->parent) {
        $crumbs->parent('adverts.inner_region', $parent, $category);
    } else {
        $crumbs->parent('home');
        $crumbs->push('Adverts', route('adverts.index'));
    }
    if ($region) {
        $crumbs->push($region->name, route('adverts.index', $region, $category));
    }
});

Breadcrumbs::for('adverts.inner_category', function (Crumbs $crumbs, Region $region = null, Category $category = null) {
    if ($category && $parent = $category->parent) {
        $crumbs->parent('adverts.inner_category', $region, $parent);
    } else {
        $crumbs->parent('adverts.inner_region', $region, $category);
    }
    if ($category) {
        $crumbs->push($category->name, route('adverts.index', $region, $category));
    }
});

Breadcrumbs::for('adverts.index', function (Crumbs $crumbs, Region $region = null, Category $category = null) {
    $crumbs->parent('adverts.inner_category', $region, $category);
});

Breadcrumbs::for('adverts.show', function (Crumbs $crumbs, Advert $advert) {
    $crumbs->parent('adverts.index', $advert->region, $advert->category);
    $crumbs->push($advert->title, route('adverts.show', $advert));
});

// Cabinet

Breadcrumbs::for('cabinet.home', function (Crumbs $crumbs) {
    $crumbs->parent('home');
    $crumbs->push('Cabinet', route('cabinet.home'));
});

Breadcrumbs::for('cabinet.profile.home', function (Crumbs $crumbs) {
    $crumbs->parent('cabinet.home');
    $crumbs->push('Profile', route('cabinet.profile.home'));
});

Breadcrumbs::for('cabinet.profile.edit', function (Crumbs $crumbs) {
    $crumbs->parent('cabinet.profile.home');
    $crumbs->push('Edit', route('cabinet.profile.edit'));
});

Breadcrumbs::for('cabinet.profile.phone', function (Crumbs $crumbs) {
    $crumbs->parent('cabinet.profile.home');
    $crumbs->push('Phone', route('cabinet.profile.phone'));
});

// Cabinet Adverts

Breadcrumbs::for('cabinet.adverts.index', function (Crumbs $crumbs) {
    $crumbs->parent('cabinet.home');
    $crumbs->push('Adverts', route('cabinet.adverts.index'));
});

Breadcrumbs::for('cabinet.adverts.create', function (Crumbs $crumbs) {
    $crumbs->parent('adverts.index');
    $crumbs->push('Create', route('cabinet.adverts.create'));
});

Breadcrumbs::for('cabinet.adverts.create.region', function (Crumbs $crumbs, Category $category, Region $region = null) {
    $crumbs->parent('cabinet.adverts.create');
    $crumbs->push($category->name, route('cabinet.adverts.create.region', [$category, $region]));
});

Breadcrumbs::for('cabinet.adverts.create.advert', function (Crumbs $crumbs, Category $category, Region $region = null) {
    $crumbs->parent('cabinet.adverts.create.region', $category, $region);
    $crumbs->push($region ? $region->name : 'All', route('cabinet.adverts.create.advert', [$category, $region]));
});

// Admin

Breadcrumbs::for('admin.home', function (Crumbs $crumbs) {
    $crumbs->parent('home');
    $crumbs->push('Admin', route('admin.home'));
});

Breadcrumbs::for('admin.users.index', function (Crumbs $crumbs) {
    $crumbs->parent('admin.home');
    $crumbs->push('Users', route('admin.users.index'));
});

Breadcrumbs::for('admin.users.create', function (Crumbs $crumbs) {
    $crumbs->parent('admin.users.index');
    $crumbs->push('Create', route('admin.users.create'));
});

Breadcrumbs::for('admin.users.show', function (Crumbs $crumbs, User $user) {
    $crumbs->parent('admin.users.index');
    $crumbs->push($user->name, route('admin.users.show', $user));
});

Breadcrumbs::for('admin.users.edit', function (Crumbs $crumbs, User $user) {
    $crumbs->parent('admin.users.show', $user);
    $crumbs->push('Edit', route('admin.users.edit', $user));
});

// Regions

Breadcrumbs::for('admin.regions.index', function (Crumbs $crumbs) {
    $crumbs->parent('admin.home');
    $crumbs->push('Regions', route('admin.regions.index'));
});

Breadcrumbs::for('admin.regions.create', function (Crumbs $crumbs) {
    $crumbs->parent('admin.regions.index');
    $crumbs->push('Create', route('admin.regions.create'));
});

Breadcrumbs::for('admin.regions.show', function (Crumbs $crumbs, Region $region) {
    if ($parent = $region->parent) {
        $crumbs->parent('admin.regions.show', $parent);
    } else {
        $crumbs->parent('admin.regions.index');
    }
    $crumbs->push($region->name, route('admin.regions.show', $region));
});

Breadcrumbs::for('admin.regions.edit', function (Crumbs $crumbs, Region $region) {
    $crumbs->parent('admin.regions.show', $region);
    $crumbs->push('Edit', route('admin.regions.edit', $region));
});

// Adverts

Breadcrumbs::for('admin.adverts.adverts.index', function (Crumbs $crumbs) {
    $crumbs->parent('admin.home');
    $crumbs->push('Categories', route('admin.adverts.adverts.index'));
});

Breadcrumbs::for('admin.adverts.adverts.edit', function (Crumbs $crumbs, Advert $advert) {
    $crumbs->parent('admin.home');
    $crumbs->push($advert->title, route('admin.adverts.adverts.edit', $advert));
});

Breadcrumbs::for('admin.adverts.adverts.reject', function (Crumbs $crumbs, Advert $advert) {
    $crumbs->parent('admin.home');
    $crumbs->push($advert->title, route('admin.adverts.adverts.reject', $advert));
});

// Advert Categories

Breadcrumbs::for('admin.adverts.categories.index', function (Crumbs $crumbs) {
    $crumbs->parent('admin.home');
    $crumbs->push('Categories', route('admin.adverts.categories.index'));
});

Breadcrumbs::for('admin.adverts.categories.create', function (Crumbs $crumbs) {
    $crumbs->parent('admin.adverts.categories.index');
    $crumbs->push('Create', route('admin.adverts.categories.create'));
});

Breadcrumbs::for('admin.adverts.categories.show', function (Crumbs $crumbs, Category $category) {
    if ($parent = $category->parent) {
        $crumbs->parent('admin.adverts.categories.show', $parent);
    } else {
        $crumbs->parent('admin.adverts.categories.index');
    }
    $crumbs->push($category->name, route('admin.adverts.categories.show', $category));
});

Breadcrumbs::for('admin.adverts.categories.edit', function (Crumbs $crumbs, Category $category) {
    $crumbs->parent('admin.adverts.categories.show', $category);
    $crumbs->push('Edit', route('admin.adverts.categories.edit', $category));
});

// Advert Category Attributes

Breadcrumbs::for('admin.adverts.categories.attributes.create', function (Crumbs $crumbs, Category $category) {
    $crumbs->parent('admin.adverts.categories.show', $category);
    $crumbs->push('Create', route('admin.adverts.categories.attributes.create', $category));
});

Breadcrumbs::for('admin.adverts.categories.attributes.show', function (Crumbs $crumbs, Category $category, Attribute $attribute) {
    $crumbs->parent('admin.adverts.categories.show', $category);
    $crumbs->push($attribute->name, route('admin.adverts.categories.attributes.show', [$category, $attribute]));
});

Breadcrumbs::for('admin.adverts.categories.attributes.edit', function (Crumbs $crumbs, Category $category, Attribute $attribute) {
    $crumbs->parent('admin.adverts.categories.attributes.show', $category, $attribute);
    $crumbs->push('Edit', route('admin.adverts.categories.attributes.edit', [$category, $attribute]));
});