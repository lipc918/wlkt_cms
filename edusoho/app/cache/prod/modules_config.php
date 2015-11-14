<?php 
return array (
  'event_subscriber' => 
  array (
    0 => 'Classroom\\Service\\Classroom\\Event\\ClassroomEventSubscriber',
    1 => 'Topxia\\Service\\Article\\Event\\ArticleEventSubscriber',
    2 => 'Topxia\\Service\\Course\\Event\\CourseEventSubscriber',
    3 => 'Topxia\\Service\\Course\\Event\\CourseLessonEventSubscriber',
    4 => 'Topxia\\Service\\Notification\\PushMessageEventSubscriber',
    5 => 'Topxia\\Service\\Question\\Event\\QuestionEventSubscriber',
    6 => 'Topxia\\Service\\Sms\\Event\\SmsEventSubscriber',
    7 => 'Topxia\\Service\\Task\\Event\\TaskEventSubscriber',
    8 => 'Topxia\\Service\\Testpaper\\Event\\TestpaperEventSubscriber',
    9 => 'Topxia\\Service\\Thread\\Event\\ThreadEventSubscriber',
    10 => 'Topxia\\Service\\User\\Event\\UserEventSubscriber',
    11 => 'Topxia\\Service\\User\\Event\\MessageEventSubscriber',
  ),
  'thread.event_processor' => 
  array (
    'classroom' => 'Classroom\\Service\\Classroom\\Event\\ClassroomThreadEventProcessor',
    'article' => 'Topxia\\Service\\Article\\Event\\ArticleEventSubscriber',
  ),
);