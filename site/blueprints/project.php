<?php if(!defined('KIRBY')) exit ?>

title: Project
pages: false
files:
  sortable: true
  fields:
    caption:
      label: Caption
      type: textarea
fields:
  title:
    label: Title
    type:  text
  text:
    label: Text
    type:  textarea
  heroImage:
    label: Hero Image
    type:  select
    options: images
    width: 1/4
  heroCover:
    label: Hero Cover
    type:  select
    options: images
    width: 1/4
  heroColor:
    label: Hero Color
    type:  text
    width: 1/4
  customColor:
    label: Custom Color
    type:  text
    width: 1/4
  year:
    label: Year
    type:  text
    width: 1/4
  tags:
    label: Tags
    type:  tags
    separator: ', ' 
    width: 3/4