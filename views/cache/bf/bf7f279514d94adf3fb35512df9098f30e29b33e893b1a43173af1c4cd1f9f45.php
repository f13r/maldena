<?php

/* templates/main.twig */
class __TwigTemplate_e69b18eb0158cc4dc0090521f8b62befadefacc23bc857a3f96ac97e05f05792 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts/main.twig", "templates/main.twig", 1);
        $this->blocks = array(
            'meta' => array($this, 'block_meta'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layouts/main.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_meta($context, array $blocks = array())
    {
        // line 5
        echo "    <title>Курсы английского языка в Виннице - Maldena English Club</title>
    <meta name=\"keywords\" content=\"курсы английского языка в Виннице, курсы английского в Виннице, школа английского языка в Виннице, школа языка в Виннице, деловой английский, курси англійської мови\"/>
    <meta name=\"description\" content=\"Курсы английского языка в Виннице, удобное расположение школы, профессиональные преподаватели и комфортные условия. Мы поможем вам стать лучше в вашей профессии\"/>
";
    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        // line 11
        echo "

    ";
        // line 13
        $this->loadTemplate("./partials/topmenu.twig", "templates/main.twig", 13)->display(array_merge($context, array("action" => "main")));
        // line 14
        echo "    ";
        $this->loadTemplate("./partials/carousel.twig", "templates/main.twig", 14)->display($context);
        // line 15
        echo "
    <div id=\"templatemo-welcome\" class=\"pc-view\">
        <div class=\"container\">
            <div class=\"templatemo-slogan text-center\">
                <h1 class=\"txt_darkgrey\">Курсы английского языка</h1>

                <p class=\"txt_slogan\"><i>Поможем стать еще лучше в вашей профессии</i></p>
            </div>
        </div>
    </div>

    <div id=\"templatemo-main\" class=\"pc-view\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"templatemo-line-header container pc-view\">
                    <div class=\"text-center row\">
                        <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-4\">
                            <hr class=\"hr_gray\"/>
                        </div>
                        <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-4\">
                            <h2>
                                <strong>
                                    Главное о нашей школе
                                </strong>
                            </h2>
                        </div>
                        <div class=\" col-lg-4 col-md-4 col-sm-4 col-xs-4\">
                            <hr class=\"hr_gray\"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"clearfix\"></div>
    <div class=\"container pc-view\">
        <div>
            <p class=\"text-center\">
                <strong>В наших группах обучаются максимум 5 человек, включая вас!</strong>
            </p>
            <p>
                Наши курсы в малых группах помогут вам освоить язык в непринужденной дружеской обстановке в уютном классе, где есть возможность не только получать новые знания, но и заводить новые знакомства.
            </p>
            <p class=\"text-center\">
                <strong>Стоимость обучения</strong>
            </p>
            <p>
                Цена занятий зависит от вашего уровня знаний английского языка, специализации программ, их продолжительности и интенсивности.
            </p>
            <ul>
                <li>
                    <p>
                        Групповые занятия (не больше 5 человек) &mdash; 1.5 часа, два-три раза в неделю, цена от 80 грн за занятие.
                    </p>
                </li>
                <li>
                    <p>
                        Индивидуальное занятие - 1 час, два-три раза в неделю, цена от 120 грн.
                    </p>
                    <p>
                       <i> В цену входит чай, кофе, печеньки, плед и уютные домашние тапочки во время обучения и бесплатное посещение разговорного клуба. Мы постарались сделать уютную атмосферу для легкого и быстрого обучения.</i>
                    </p>
                </li>
            </ul>
        </div>
    </div>
    <div class=\"clearfix\"></div>

    <div class=\"pc-view\">
        ";
        // line 85
        $this->loadTemplate("./partials/tryitout.twig", "templates/main.twig", 85)->display($context);
        // line 86
        echo "    </div>

    <div id=\"templatemo-for-start\" class=\"pc-view\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"templatemo-line-header container pc-view\">
                    <div class=\"text-center row\">
                        <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-4\">
                            <hr class=\"hr_gray\"/>
                        </div>
                        <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-4\">
                            <h2>
                                <strong>
                                    Что нужно чтобы начать
                                </strong>
                            </h2>
                        </div>
                        <div class=\" col-lg-4 col-md-4 col-sm-4 col-xs-4\">
                            <hr class=\"hr_gray\"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"clearfix\"></div>
    <div class=\"container pc-view\">
        <div>
            <p>
                Чтобы начать обучение нам необходимо знать ваш текущий уровень языка и цели обучения. Для этого вы можете:
            </p>
            <ul>
                <li>
                    <p>
                        Вы можете позвонить к нам по телефону <strong>";
        // line 121
        echo twig_escape_filter($this->env, (isset($context["phone"]) ? $context["phone"] : $this->getContext($context, "phone")), "html", null, true);
        echo "</strong> или  <strong>";
        echo twig_escape_filter($this->env, (isset($context["phone2"]) ? $context["phone2"] : $this->getContext($context, "phone2")), "html", null, true);
        echo "</strong> и договориться о прохождении теста на определения уровня
                    </p>
                </li>
                <li>
                    <p>
                        Вы можете пройти <a class=\"underline\" href=\"";
        // line 126
        echo $this->env->getExtension('routing')->getPath("test");
        echo "\" target=\"_blank\">тест</a> прямо у нас на сайте не выходя из дома:
                    </p>
                    <p class=\"text-center underline\">
                        <a href=\"";
        // line 129
        echo $this->env->getExtension('routing')->getPath("test");
        echo "\" target=\"_blank\">Пройти тест для того, чтобы узнать уровень своего английского>></a>
                    </p>
                    <p>
                        После того как вы пройдете тесты наши преподаватели определят ваш уровень и мы перезвоним и предложим лучший вариант обучения!
                    </p>
                </li>
            </ul>
        </div>
    </div>
    <div class=\"clearfix\"></div>

    <div id=\"templatemo-about\" class=\"pc-view\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"templatemo-line-header container pc-view\">
                    <div class=\"text-center row\">
                        <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-4\">
                            <hr class=\"hr_gray\"/>
                        </div>
                        <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-4\">
                            <h2>
                                <strong>
                                    Почему именно наша школа английского
                                </strong>
                            </h2>
                        </div>
                        <div class=\" col-lg-4 col-md-4 col-sm-4 col-xs-4\">
                            <hr class=\"hr_gray\"/>
                        </div>
                    </div>
                </div>
                <div class=\"templatemo-line-header container mobile-view\">
                    <div class=\"text-center row\">
                        <div class=\"col-xs-3\">
                            <hr class=\"hr_gray\"/>
                        </div>
                        <div class=\"col-xs-6\"><h2>Индивидуальное обучение</h2></div>
                        <div class=\"col-xs-3\">
                            <hr class=\"hr_gray\"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"clearfix\"></div>
    <div class=\"container pc-view\">
        <div>
            <ul>
                <li>
                    <p>
                        Профессиональные преподаватели. Квалифицированные преподаватели, чей профессионализм подтверждают соответствующие дипломы и международные сертификаты, рады поделиться с вами своими знаниями.
                    </p>
                </li>
                <li>
                    <p>
                        Разговорный клуб (Speaking Club) — дополнительный стимул учить добросовестно и качественно. При наших курсах английского работает Speaking Club, где студенты общаются на различные темы, улучшая произношение и лексический запас.
                    </p>
                </li>
                <li>
                    <p>
                        Приемлемые цены. Многие выбирают курсы английского по стоимости. Однако это ошибочный подход, так как цена не может быть показателем качества обучения, а является лишь приятным бонусом при невысокой стоимости занятий.
                    </p>
                </li>
                <li>
                    <p>
                        Удобное месторасположение. Наша школа английского языка расположена в центре города, поэтому добираться до нас удобно жителям всех районов.
                    </p>
                </li>
            </ul>
        </div>
    </div>
    <div class=\"clearfix\"></div>
    <div class=\"pc-view\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"templatemo-line-header container pc-view\">
                    <div class=\"text-center row\">
                        <div class=\" col-lg-4 col-md-4 col-sm-4 col-xs-4\">
                            <hr class=\"hr_gray\"/>
                        </div>
                        <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-4\"><h2><strong>Подход к обучению</strong></h2>
                        </div>
                        <div class=\" col-lg-4 col-md-4 col-sm-4 col-xs-4\">
                            <hr class=\"hr_gray\"/>
                        </div>
                    </div>
                </div>
                <div class=\"templatemo-line-header container mobile-view\">
                    <div class=\"text-center row\">
                        <div class=\"col-xs-3\">
                            <hr class=\"hr_gray\"/>
                        </div>
                        <div class=\"col-xs-6\"><h2>Групповые занятия</h2></div>
                        <div class=\"col-xs-3\">
                            <hr class=\"hr_gray\"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"clearfix\"></div>
        <div class=\"container\">
            <div class=\"\">
                <p>
                    Учить английский язык с школой «Maldena English Club» просто и увлекательно, потому что в основе занятий:
                </p>
                <ul>
                    <li>
                        <p>
                            Уникальная технология обучения. Программы насыщены игровыми моментами и похожи на тренинг. Забудьте скучные уроки в школе! Скука — первый враг обучения.
                        </p>
                    </li>
                    <li>
                        <p>
                            80% разговорной практики – 20% теории. Давно доказано, что иностранный язык усваивается намного проще в процессе активного общения.
                        </p>
                    </li>
                    <li>
                        <p>
                            Принцип последовательности. Откажитесь от заучивания слов и фраз!
                        </p>
                    </li>
                    <li>
                        <p>
                            Индивидуально-ориентированная программа. Расскажите нам, для каких целей вам необходим иностранный язык и мы вместе подберем для вас наиболее эффективную программу обучения не по примитивным шаблонам учебников! С нами вы забудете про языковой барьер и откроете для себя большие перспективы общения!
                        </p>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class=\"mobile-view container main-block\">
        <div>
            <p>Похоже что вы с мобильного, по этому не буду тратить ваше время. У нас есть такие <b>виды
                    обучения</b>: </p>
            <ul>
                <li><strong><a href=\"";
        // line 268
        echo $this->env->getExtension('routing')->getPath("group");
        echo "\">Групповые</a> и <a href=\"";
        echo $this->env->getExtension('routing')->getPath("individually");
        echo "\">индивидуальные</a></strong></li>
                <li><strong>Базовый английский и профессиональный</strong>. Поможем подтянуть ваш технический
                    английский в
                    практически любой профессии. Так же английский для бизнеса
                </li>
                <li>Помощь с поездками за рубеж</li>
                <li><a href=\"";
        // line 274
        echo $this->env->getExtension('routing')->getPath("speaker");
        echo "\"><strong>Speaking club</strong></a></li>
                <li><strong><a href=\"";
        // line 275
        echo $this->env->getExtension('routing')->getPath("demo");
        echo "\">Бесплатный пробный урок</a></strong></li>
            </ul>
        </div>
        <div>
            <p>О наших плюсах и минусах и почему стоит выбрать именно наши курсы английского языка.</p>

            <p>Плюсы:</p>
            <ul>
                <li><strong>Удобное расположения школы</strong>. Самый центр города в двух минутах ходьбы от башни,
                    возле
                    пиццерии New York Pizza
                </li>
                <li><strong>Профессиональные преподаватели</strong>. Все учителя имеют опыт роботы, профильное
                    образование и
                    что самое главное любят обучать людей новому
                </li>
                <li>Мы будем работать на ваш результат. У нас нет 6 курсов по 6 месяцев каждый. Вы говорите какой
                    ожидаете
                    результат и на основании ваших знаний мы будем строить план обучения
                </li>
                <li>Если вы планируете учится в группе, то кроме вас там будет ещё максимум четыре студента. Урок
                    будет
                    длится 1,5 часа и за это время учитель успевает оказывать должное внимание каждому ученику
                </li>
            </ul>
            <p>Минусы:</p>
            <ul>
                <li>Первый этаж и окна выходят в центр города, иногда немного слышно уличных музыкантов. Нет, это не
                    предоставит большие не удобства. Но иногда музыка играет
                </li>
                <li>Мы ценим комфорт и хотим сделать комфортным обучение, по этому кофе, чай мы предоставляем
                    каждому
                    студенту при его желании. Это может занимать немного времени
                </li>
                <li>Слишком симпатичные преподаватели. Без комментариев :)</li>
            </ul>
            <p>
                Как вы поняли я немного лукавил когда говорил о минусах. Конечно они у нас есть и если вы укажите
                нам на них
                то мы обязательно их исправим
            </p>
        </div>
        <div>
            <p>
                <strong>Условия:</strong>
            </p>
            <ul>
                <li>Индивидуальное занятие - 1 час, два-три раза в неделю, цена от 120 грн.</li>
                <li>Групповые занятия(не больше 5 человек) - 1.5 часа, два-три раза в неделю, цена от 80 грн.</li>
            </ul>
            <p>Для детей цены ниже</p>

            <p class=\"text-center\">
                <strong>Попробуйте наше обучение бесплатно</strong>
            </p>
            <p>
                Попробуйте наш бесплатный <a href=\"";
        // line 331
        echo $this->env->getExtension('routing')->getPath("demo");
        echo "\">пробный урок</a>, а после этого решайте хотите ли вы продолжить обучение:
            </p>
            <p class=\"text-center underline\">
                <a href=\"";
        // line 334
        echo $this->env->getExtension('routing')->getPath("demo");
        echo "\">Записаться на бесплатный пробный урок>></a>
            </p>

            <p><strong>Звоните или пишите</strong> нам и наш клиент-менеджер Яна ответит на все ваши вопросы.
                Как
                связаться:</p>
            <ul>
                <li>Телефоны: <strong>";
        // line 341
        echo twig_escape_filter($this->env, (isset($context["phone"]) ? $context["phone"] : $this->getContext($context, "phone")), "html", null, true);
        echo " и ";
        echo twig_escape_filter($this->env, (isset($context["phone2"]) ? $context["phone2"] : $this->getContext($context, "phone2")), "html", null, true);
        echo "</strong></li>
                <li>Skype: ";
        // line 342
        echo twig_escape_filter($this->env, (isset($context["skype"]) ? $context["skype"] : $this->getContext($context, "skype")), "html", null, true);
        echo "</li>
                <li>E-mail: ";
        // line 343
        echo twig_escape_filter($this->env, (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email")), "html", null, true);
        echo "</li>
            </ul>
        </div>
        <div>
            <p>Детальнее о наших услугах:</p>
            <ul>
                <li>
                    <a href=\"";
        // line 350
        echo $this->env->getExtension('routing')->getPath("group");
        echo "\">
                        <strong>Групповые занятия</strong>
                    </a>
                </li>
                <li>
                    <a href=\"";
        // line 355
        echo $this->env->getExtension('routing')->getPath("individually");
        echo "\">
                        <strong>Индивидуальное обучение</strong>
                    </a>
                </li>
                <li>
                    <a href=\"";
        // line 360
        echo $this->env->getExtension('routing')->getPath("speaker");
        echo "\">
                        <strong>Speaking club</strong>
                    </a>
                </li>
                <li>
                    <a href=\"";
        // line 365
        echo $this->env->getExtension('routing')->getPath("demo");
        echo "\">
                        <strong>Бесплатный пробный урок</strong>
                    </a>
                </li>
                <li>
                    <a href=\"";
        // line 370
        echo $this->env->getExtension('routing')->getPath("test");
        echo "\">
                        <strong>Online-тест</strong>
                    </a>
                </li>
            </ul>
        </div>

    </div>

    ";
        // line 379
        $this->loadTemplate("./partials/contacts.twig", "templates/main.twig", 379)->display($context);
        // line 380
        echo "    <div class=\"clearfix\"></div>
    <br>

";
    }

    public function getTemplateName()
    {
        return "templates/main.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  476 => 380,  474 => 379,  462 => 370,  454 => 365,  446 => 360,  438 => 355,  430 => 350,  420 => 343,  416 => 342,  410 => 341,  400 => 334,  394 => 331,  335 => 275,  331 => 274,  320 => 268,  178 => 129,  172 => 126,  162 => 121,  125 => 86,  123 => 85,  51 => 15,  48 => 14,  46 => 13,  42 => 11,  39 => 10,  32 => 5,  29 => 4,  11 => 1,);
    }
}
/* {% extends "layouts/main.twig" %}*/
/* */
/* */
/* {% block meta %}*/
/*     <title>Курсы английского языка в Виннице - Maldena English Club</title>*/
/*     <meta name="keywords" content="курсы английского языка в Виннице, курсы английского в Виннице, школа английского языка в Виннице, школа языка в Виннице, деловой английский, курси англійської мови"/>*/
/*     <meta name="description" content="Курсы английского языка в Виннице, удобное расположение школы, профессиональные преподаватели и комфортные условия. Мы поможем вам стать лучше в вашей профессии"/>*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/* */
/* */
/*     {% include "./partials/topmenu.twig" with {'action': 'main'} %}*/
/*     {% include "./partials/carousel.twig" %}*/
/* */
/*     <div id="templatemo-welcome" class="pc-view">*/
/*         <div class="container">*/
/*             <div class="templatemo-slogan text-center">*/
/*                 <h1 class="txt_darkgrey">Курсы английского языка</h1>*/
/* */
/*                 <p class="txt_slogan"><i>Поможем стать еще лучше в вашей профессии</i></p>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div id="templatemo-main" class="pc-view">*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="templatemo-line-header container pc-view">*/
/*                     <div class="text-center row">*/
/*                         <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">*/
/*                             <hr class="hr_gray"/>*/
/*                         </div>*/
/*                         <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">*/
/*                             <h2>*/
/*                                 <strong>*/
/*                                     Главное о нашей школе*/
/*                                 </strong>*/
/*                             </h2>*/
/*                         </div>*/
/*                         <div class=" col-lg-4 col-md-4 col-sm-4 col-xs-4">*/
/*                             <hr class="hr_gray"/>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="clearfix"></div>*/
/*     <div class="container pc-view">*/
/*         <div>*/
/*             <p class="text-center">*/
/*                 <strong>В наших группах обучаются максимум 5 человек, включая вас!</strong>*/
/*             </p>*/
/*             <p>*/
/*                 Наши курсы в малых группах помогут вам освоить язык в непринужденной дружеской обстановке в уютном классе, где есть возможность не только получать новые знания, но и заводить новые знакомства.*/
/*             </p>*/
/*             <p class="text-center">*/
/*                 <strong>Стоимость обучения</strong>*/
/*             </p>*/
/*             <p>*/
/*                 Цена занятий зависит от вашего уровня знаний английского языка, специализации программ, их продолжительности и интенсивности.*/
/*             </p>*/
/*             <ul>*/
/*                 <li>*/
/*                     <p>*/
/*                         Групповые занятия (не больше 5 человек) &mdash; 1.5 часа, два-три раза в неделю, цена от 80 грн за занятие.*/
/*                     </p>*/
/*                 </li>*/
/*                 <li>*/
/*                     <p>*/
/*                         Индивидуальное занятие - 1 час, два-три раза в неделю, цена от 120 грн.*/
/*                     </p>*/
/*                     <p>*/
/*                        <i> В цену входит чай, кофе, печеньки, плед и уютные домашние тапочки во время обучения и бесплатное посещение разговорного клуба. Мы постарались сделать уютную атмосферу для легкого и быстрого обучения.</i>*/
/*                     </p>*/
/*                 </li>*/
/*             </ul>*/
/*         </div>*/
/*     </div>*/
/*     <div class="clearfix"></div>*/
/* */
/*     <div class="pc-view">*/
/*         {% include "./partials/tryitout.twig" %}*/
/*     </div>*/
/* */
/*     <div id="templatemo-for-start" class="pc-view">*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="templatemo-line-header container pc-view">*/
/*                     <div class="text-center row">*/
/*                         <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">*/
/*                             <hr class="hr_gray"/>*/
/*                         </div>*/
/*                         <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">*/
/*                             <h2>*/
/*                                 <strong>*/
/*                                     Что нужно чтобы начать*/
/*                                 </strong>*/
/*                             </h2>*/
/*                         </div>*/
/*                         <div class=" col-lg-4 col-md-4 col-sm-4 col-xs-4">*/
/*                             <hr class="hr_gray"/>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="clearfix"></div>*/
/*     <div class="container pc-view">*/
/*         <div>*/
/*             <p>*/
/*                 Чтобы начать обучение нам необходимо знать ваш текущий уровень языка и цели обучения. Для этого вы можете:*/
/*             </p>*/
/*             <ul>*/
/*                 <li>*/
/*                     <p>*/
/*                         Вы можете позвонить к нам по телефону <strong>{{phone}}</strong> или  <strong>{{phone2}}</strong> и договориться о прохождении теста на определения уровня*/
/*                     </p>*/
/*                 </li>*/
/*                 <li>*/
/*                     <p>*/
/*                         Вы можете пройти <a class="underline" href="{{ path('test') }}" target="_blank">тест</a> прямо у нас на сайте не выходя из дома:*/
/*                     </p>*/
/*                     <p class="text-center underline">*/
/*                         <a href="{{ path('test') }}" target="_blank">Пройти тест для того, чтобы узнать уровень своего английского>></a>*/
/*                     </p>*/
/*                     <p>*/
/*                         После того как вы пройдете тесты наши преподаватели определят ваш уровень и мы перезвоним и предложим лучший вариант обучения!*/
/*                     </p>*/
/*                 </li>*/
/*             </ul>*/
/*         </div>*/
/*     </div>*/
/*     <div class="clearfix"></div>*/
/* */
/*     <div id="templatemo-about" class="pc-view">*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="templatemo-line-header container pc-view">*/
/*                     <div class="text-center row">*/
/*                         <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">*/
/*                             <hr class="hr_gray"/>*/
/*                         </div>*/
/*                         <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">*/
/*                             <h2>*/
/*                                 <strong>*/
/*                                     Почему именно наша школа английского*/
/*                                 </strong>*/
/*                             </h2>*/
/*                         </div>*/
/*                         <div class=" col-lg-4 col-md-4 col-sm-4 col-xs-4">*/
/*                             <hr class="hr_gray"/>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="templatemo-line-header container mobile-view">*/
/*                     <div class="text-center row">*/
/*                         <div class="col-xs-3">*/
/*                             <hr class="hr_gray"/>*/
/*                         </div>*/
/*                         <div class="col-xs-6"><h2>Индивидуальное обучение</h2></div>*/
/*                         <div class="col-xs-3">*/
/*                             <hr class="hr_gray"/>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="clearfix"></div>*/
/*     <div class="container pc-view">*/
/*         <div>*/
/*             <ul>*/
/*                 <li>*/
/*                     <p>*/
/*                         Профессиональные преподаватели. Квалифицированные преподаватели, чей профессионализм подтверждают соответствующие дипломы и международные сертификаты, рады поделиться с вами своими знаниями.*/
/*                     </p>*/
/*                 </li>*/
/*                 <li>*/
/*                     <p>*/
/*                         Разговорный клуб (Speaking Club) — дополнительный стимул учить добросовестно и качественно. При наших курсах английского работает Speaking Club, где студенты общаются на различные темы, улучшая произношение и лексический запас.*/
/*                     </p>*/
/*                 </li>*/
/*                 <li>*/
/*                     <p>*/
/*                         Приемлемые цены. Многие выбирают курсы английского по стоимости. Однако это ошибочный подход, так как цена не может быть показателем качества обучения, а является лишь приятным бонусом при невысокой стоимости занятий.*/
/*                     </p>*/
/*                 </li>*/
/*                 <li>*/
/*                     <p>*/
/*                         Удобное месторасположение. Наша школа английского языка расположена в центре города, поэтому добираться до нас удобно жителям всех районов.*/
/*                     </p>*/
/*                 </li>*/
/*             </ul>*/
/*         </div>*/
/*     </div>*/
/*     <div class="clearfix"></div>*/
/*     <div class="pc-view">*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="templatemo-line-header container pc-view">*/
/*                     <div class="text-center row">*/
/*                         <div class=" col-lg-4 col-md-4 col-sm-4 col-xs-4">*/
/*                             <hr class="hr_gray"/>*/
/*                         </div>*/
/*                         <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"><h2><strong>Подход к обучению</strong></h2>*/
/*                         </div>*/
/*                         <div class=" col-lg-4 col-md-4 col-sm-4 col-xs-4">*/
/*                             <hr class="hr_gray"/>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="templatemo-line-header container mobile-view">*/
/*                     <div class="text-center row">*/
/*                         <div class="col-xs-3">*/
/*                             <hr class="hr_gray"/>*/
/*                         </div>*/
/*                         <div class="col-xs-6"><h2>Групповые занятия</h2></div>*/
/*                         <div class="col-xs-3">*/
/*                             <hr class="hr_gray"/>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="clearfix"></div>*/
/*         <div class="container">*/
/*             <div class="">*/
/*                 <p>*/
/*                     Учить английский язык с школой «Maldena English Club» просто и увлекательно, потому что в основе занятий:*/
/*                 </p>*/
/*                 <ul>*/
/*                     <li>*/
/*                         <p>*/
/*                             Уникальная технология обучения. Программы насыщены игровыми моментами и похожи на тренинг. Забудьте скучные уроки в школе! Скука — первый враг обучения.*/
/*                         </p>*/
/*                     </li>*/
/*                     <li>*/
/*                         <p>*/
/*                             80% разговорной практики – 20% теории. Давно доказано, что иностранный язык усваивается намного проще в процессе активного общения.*/
/*                         </p>*/
/*                     </li>*/
/*                     <li>*/
/*                         <p>*/
/*                             Принцип последовательности. Откажитесь от заучивания слов и фраз!*/
/*                         </p>*/
/*                     </li>*/
/*                     <li>*/
/*                         <p>*/
/*                             Индивидуально-ориентированная программа. Расскажите нам, для каких целей вам необходим иностранный язык и мы вместе подберем для вас наиболее эффективную программу обучения не по примитивным шаблонам учебников! С нами вы забудете про языковой барьер и откроете для себя большие перспективы общения!*/
/*                         </p>*/
/*                     </li>*/
/*                 </ul>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="mobile-view container main-block">*/
/*         <div>*/
/*             <p>Похоже что вы с мобильного, по этому не буду тратить ваше время. У нас есть такие <b>виды*/
/*                     обучения</b>: </p>*/
/*             <ul>*/
/*                 <li><strong><a href="{{ path('group') }}">Групповые</a> и <a href="{{ path('individually') }}">индивидуальные</a></strong></li>*/
/*                 <li><strong>Базовый английский и профессиональный</strong>. Поможем подтянуть ваш технический*/
/*                     английский в*/
/*                     практически любой профессии. Так же английский для бизнеса*/
/*                 </li>*/
/*                 <li>Помощь с поездками за рубеж</li>*/
/*                 <li><a href="{{ path('speaker') }}"><strong>Speaking club</strong></a></li>*/
/*                 <li><strong><a href="{{ path('demo') }}">Бесплатный пробный урок</a></strong></li>*/
/*             </ul>*/
/*         </div>*/
/*         <div>*/
/*             <p>О наших плюсах и минусах и почему стоит выбрать именно наши курсы английского языка.</p>*/
/* */
/*             <p>Плюсы:</p>*/
/*             <ul>*/
/*                 <li><strong>Удобное расположения школы</strong>. Самый центр города в двух минутах ходьбы от башни,*/
/*                     возле*/
/*                     пиццерии New York Pizza*/
/*                 </li>*/
/*                 <li><strong>Профессиональные преподаватели</strong>. Все учителя имеют опыт роботы, профильное*/
/*                     образование и*/
/*                     что самое главное любят обучать людей новому*/
/*                 </li>*/
/*                 <li>Мы будем работать на ваш результат. У нас нет 6 курсов по 6 месяцев каждый. Вы говорите какой*/
/*                     ожидаете*/
/*                     результат и на основании ваших знаний мы будем строить план обучения*/
/*                 </li>*/
/*                 <li>Если вы планируете учится в группе, то кроме вас там будет ещё максимум четыре студента. Урок*/
/*                     будет*/
/*                     длится 1,5 часа и за это время учитель успевает оказывать должное внимание каждому ученику*/
/*                 </li>*/
/*             </ul>*/
/*             <p>Минусы:</p>*/
/*             <ul>*/
/*                 <li>Первый этаж и окна выходят в центр города, иногда немного слышно уличных музыкантов. Нет, это не*/
/*                     предоставит большие не удобства. Но иногда музыка играет*/
/*                 </li>*/
/*                 <li>Мы ценим комфорт и хотим сделать комфортным обучение, по этому кофе, чай мы предоставляем*/
/*                     каждому*/
/*                     студенту при его желании. Это может занимать немного времени*/
/*                 </li>*/
/*                 <li>Слишком симпатичные преподаватели. Без комментариев :)</li>*/
/*             </ul>*/
/*             <p>*/
/*                 Как вы поняли я немного лукавил когда говорил о минусах. Конечно они у нас есть и если вы укажите*/
/*                 нам на них*/
/*                 то мы обязательно их исправим*/
/*             </p>*/
/*         </div>*/
/*         <div>*/
/*             <p>*/
/*                 <strong>Условия:</strong>*/
/*             </p>*/
/*             <ul>*/
/*                 <li>Индивидуальное занятие - 1 час, два-три раза в неделю, цена от 120 грн.</li>*/
/*                 <li>Групповые занятия(не больше 5 человек) - 1.5 часа, два-три раза в неделю, цена от 80 грн.</li>*/
/*             </ul>*/
/*             <p>Для детей цены ниже</p>*/
/* */
/*             <p class="text-center">*/
/*                 <strong>Попробуйте наше обучение бесплатно</strong>*/
/*             </p>*/
/*             <p>*/
/*                 Попробуйте наш бесплатный <a href="{{ path('demo') }}">пробный урок</a>, а после этого решайте хотите ли вы продолжить обучение:*/
/*             </p>*/
/*             <p class="text-center underline">*/
/*                 <a href="{{ path('demo') }}">Записаться на бесплатный пробный урок>></a>*/
/*             </p>*/
/* */
/*             <p><strong>Звоните или пишите</strong> нам и наш клиент-менеджер Яна ответит на все ваши вопросы.*/
/*                 Как*/
/*                 связаться:</p>*/
/*             <ul>*/
/*                 <li>Телефоны: <strong>{{ phone }} и {{ phone2 }}</strong></li>*/
/*                 <li>Skype: {{ skype }}</li>*/
/*                 <li>E-mail: {{ email }}</li>*/
/*             </ul>*/
/*         </div>*/
/*         <div>*/
/*             <p>Детальнее о наших услугах:</p>*/
/*             <ul>*/
/*                 <li>*/
/*                     <a href="{{ path('group') }}">*/
/*                         <strong>Групповые занятия</strong>*/
/*                     </a>*/
/*                 </li>*/
/*                 <li>*/
/*                     <a href="{{ path('individually') }}">*/
/*                         <strong>Индивидуальное обучение</strong>*/
/*                     </a>*/
/*                 </li>*/
/*                 <li>*/
/*                     <a href="{{ path('speaker') }}">*/
/*                         <strong>Speaking club</strong>*/
/*                     </a>*/
/*                 </li>*/
/*                 <li>*/
/*                     <a href="{{ path('demo') }}">*/
/*                         <strong>Бесплатный пробный урок</strong>*/
/*                     </a>*/
/*                 </li>*/
/*                 <li>*/
/*                     <a href="{{ path('test') }}">*/
/*                         <strong>Online-тест</strong>*/
/*                     </a>*/
/*                 </li>*/
/*             </ul>*/
/*         </div>*/
/* */
/*     </div>*/
/* */
/*     {% include "./partials/contacts.twig" %}*/
/*     <div class="clearfix"></div>*/
/*     <br>*/
/* */
/* {% endblock %}*/
/* */
/* */