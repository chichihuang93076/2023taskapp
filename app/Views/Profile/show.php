<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>Profile<?= $this->endSection() ?>

<?= $this->section('content') ?>

<h1>Profile</h1>

<?php if ($user->profile_image):  ?>

  <img src="<?= site_url('/profile/image') ?>" alt="profile image" with="200" height="200">

  <a href="<?= site_url("/profileimage/delete")?>">Delete profile image</a>

<?php else: ?>

  <img src="<?= site_url('/images/blank_profile.png') ?>" alt="profile image" with="200" height="200">

<?php endif; ?>

<dl>
  <dt>Name</dt>
  <dd><?= esc($user->name)?></dd>
</dl>

<dl>
  <dt>Email</dt>
  <dd><?= esc($user->email)?></dd>
</dl>

<a href="<?= site_url("/profile/edit")?>">Edit</a>

<a href="<?= site_url("/profile/editpassword")?>">Change password</a>

<a href="<?= site_url("/profileimage/edit")?>">Change profile image</a>

<?= $this->endSection() ?>