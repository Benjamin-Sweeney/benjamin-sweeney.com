<?php if(!defined('KIRBY')) exit ?>

title: Article
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
  date:
    label: Date
    type: date
    format: MM/DD/YYYY
    width: 1/4
  tags:
    label: Tags
    type:  tags
    separator: ', ' 
    width: 3/4