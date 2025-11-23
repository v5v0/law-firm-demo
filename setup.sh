#!/bin/bash

# Activate theme
wp theme activate lawyer

# Create Pages
HOME_ID=$(wp post create --post_type=page --post_title="Начало" --post_status=publish --porcelain)
ABOUT_ID=$(wp post create --post_type=page --post_title="За кантората" --post_status=publish --porcelain)
SERVICES_ID=$(wp post create --post_type=page --post_title="Услуги" --post_status=publish --porcelain)
CONTACT_ID=$(wp post create --post_type=page --post_title="Контакти" --post_status=publish --porcelain)
BLOG_ID=$(wp post create --post_type=page --post_title="Публикации" --post_status=publish --porcelain)

# Set Front Page
wp option update show_on_front page
wp option update page_on_front $HOME_ID
wp option update page_for_posts $BLOG_ID

# Create Service Pages
wp post create --post_type=page --post_title="Търговско право" --post_parent=$SERVICES_ID --post_status=publish
wp post create --post_type=page --post_title="Събиране на вземания" --post_parent=$SERVICES_ID --post_status=publish
wp post create --post_type=page --post_title="Обезщетение за вреди" --post_parent=$SERVICES_ID --post_status=publish
wp post create --post_type=page --post_title="Договорно право" --post_parent=$SERVICES_ID --post_status=publish
wp post create --post_type=page --post_title="Трудова миграция" --post_parent=$SERVICES_ID --post_status=publish
wp post create --post_type=page --post_title="Синя карта на ЕС" --post_parent=$SERVICES_ID --post_status=publish

# Create Dummy Posts
wp post create --post_type=post --post_title="Неизпълнение на договор. Как да защитим правата си?" --post_content="Неизпълнението на договорите е един от най-честите източници на рискове..." --post_status=publish
wp post create --post_type=post --post_title="Трудов договор със срок за изпитване" --post_content="Съвременните процеси на глобализация и интегриране на цифровите технологии оказват..." --post_status=publish
wp post create --post_type=post --post_title="България отваря врати за дигиталните номади" --post_content="С промени в Закона за чужденците в Република България..." --post_status=publish

# Create Menu
MENU_ID=$(wp menu create "Main Menu" --porcelain)
wp menu item add-post $MENU_ID $ABOUT_ID
wp menu item add-post $MENU_ID $SERVICES_ID
wp menu item add-post $MENU_ID $BLOG_ID
wp menu item add-post $MENU_ID $CONTACT_ID

# Assign Menu to Location (assuming 'header' or just rely on block fallback, but block themes use Navigation block which often references menu)
# Block themes usually use the navigation block which can select a menu. 
# We'll just output the menu ID so the user can select it if needed, or we can try to set it if the theme registered a location (we didn't register one in functions.php because block themes don't strictly need it, but it helps).

echo "Setup complete. Theme 'lawyer' activated. Content created."

