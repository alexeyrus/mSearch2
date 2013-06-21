<?php
/**
 * Properties Russian Lexicon Entries for mSearch2
 *
 * @package msearch2
 * @subpackage lexicon
 */

$_lang['mse2_prop_tpl'] = 'Чанк оформления для каждого результата';
$_lang['mse2_prop_limit'] = 'Лимит выборки результатов';
$_lang['mse2_prop_offset'] = 'Пропуск результатов с начала выборки';
$_lang['mse2_prop_outputSeparator'] = 'Необязательная строка для разделения результатов работы.';
$_lang['mse2_prop_toPlaceholder'] = 'Если не пусто, сниппет сохранит все данные в плейсхолдер с этим именем, вместо вывода не экран.';

$_lang['mse2_prop_returnIds'] = 'Вернуть только список id подходящих страниц, через запятую.';
$_lang['mse2_prop_showLog'] = 'Показывать дополнительную информацию о работе сниппета. Только для авторизованных в контекте "mgr".';
$_lang['mse2_prop_fastMode'] = 'Если включено - в чанк результата будут подставлены только значения из БД. Все необработанные теги MODX, такие как фильтры, вызов сниппетов и другие - будут вырезаны.';

$_lang['mse2_prop_parents'] = 'Список категорий, через запятую, для ограничения вывода результатов. По умолчанию, нет.';
$_lang['mse2_prop_depth'] = 'Глубина поиска ресурсов от каждого родителя.';

$_lang['mse2_prop_includeTVs'] = 'Список ТВ параметров для выборки, через запятую. Например: "action,time" дадут плейсхолдеры [[+action]] и [[+time]].';
$_lang['mse2_prop_tvPrefix'] = 'Префикс для ТВ плейсхолдеров, например "tv.". По умолчанию параметр пуст.';

$_lang['mse2_prop_where'] = 'Дополнительные параметры выборки, закодированные в JSON.';
$_lang['mse2_prop_showUnpublished'] = 'Показывать неопубликованные товары.';
$_lang['mse2_prop_showDeleted'] = 'Показывать удалённые ресурсы.';
$_lang['mse2_prop_showHidden'] = 'Показывать ресурсы, скрытые в меню.';

$_lang['mse2_prop_introCutBefore'] = 'Укажите количество символов для вывода в плейсхолдере [[+intro]] перед первым совпадением в тексте. По умолчанию - "50".';
$_lang['mse2_prop_introCutAfter'] = 'Укажите количество символов для вывода в плейсхолдере [[+intro]] после первого совпадения в тексте. По умолчанию - "250".';

$_lang['mse2_prop_htagOpen'] = 'Открывающий тег для подсветки найденных результатов в [[+intro]].';
$_lang['mse2_prop_htagClose'] = 'Закрывающий тег для подсветки найденных результатов в [[+intro]].';

$_lang['mse2_prop_minQuery'] = 'Минимальная длина поискового запроса.';
$_lang['mse2_prop_parentsVar'] = 'Имя переменной для дополнительной фильтрации по родителям. По умолчанию - "parents", может быть передано через $_REQUEST.';
$_lang['mse2_prop_queryVar'] = 'Имя переменной для получения поискового запроса из $_REQUEST. По умолчанию - "query"';

$_lang['mse2_prop_paginator'] = 'Сниппет для постраничной навигации, по умолчанию "getPage".';
$_lang['mse2_prop_element'] = 'Сниппет, который будет вызываться пагинатором для вывода результатов работы. По умолчанию - "mSearch2".';
$_lang['mse2_prop_resources'] = 'Список ресурсов для вывода, через запятую. Этот список может быть отфильтрован другими параметрами, такими как "parents", "showDeleted", "showHidden" и "showUnpublished".';
$_lang['mse2_prop_showEmptyFilters'] = 'Показывать фильтры всего с одним значением.';
$_lang['mse2_prop_sort'] = 'Список полей ресурса для сортировки. Указывается в формате "таблица|поле:направление". Можно указывать несколько полей через запятую, например: "resource:publisedon:desc,ms|price:asc".';
$_lang['mse2_prop_filters'] = 'Список фильтров ресурсов, через запятую. Указывается в формате "таблица|поле:метод". По умолчанию: "resource|parent:parents".';

$_lang['mse2_prop_tplOuter'] = 'Чанк оформления всего блока фильтров и результатов.';
$_lang['mse2_prop_tplFilter.outer.default'] = 'Стандартный чанк оформления одной группы фильтров.';
$_lang['mse2_prop_tplFilter.row.default'] = 'Стандартный чанк оформления одного фильтра в группе. По умолчанию выводится как checkbox.';
