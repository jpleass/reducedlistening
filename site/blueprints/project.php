<?php if(!defined('KIRBY')) exit ?>

title: Project
pages: false
files:
  sortable: true
fields:
  title:
    label: Title
    type:  text
  year:
    label: Year
    type:  text
  client:
    label: Client
    type:  text
  frontpagetext:
    label: Front Page Text
    type:  textarea
    help: Text that will appear on front page description
  text:
    label: Text
    type:  textarea
    help: Text for project level page
  soudncloud:
    label: SoundCloud Link
    type:  text
    help: Soundcloud embed link