<?php

/* templates/englishTest.twig */
class __TwigTemplate_25d3e249e851dc5b8f1bd11606f0e6deb1be467749b42b1aeaf571b3330e733e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts/main.twig", "templates/englishTest.twig", 1);
        $this->blocks = array(
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

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
    <div class=\"mar-top-xxl\">
        <form method=\"post\" action=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("admin_logout");
        echo "\">
        <div class=\"container\">
            <div>
                <span>Пройдите тест чтобы мы могли узнать уровень вашего английського и предложить лучший вариант для обучения:</span>
            </div>
            <div class=\"questions\">
                <ul class=\"list-group\">
                    <li class=\"list-group-item\">
                        <div class=\"description\">Перед тем как начать, пожалуйста, заполните ваши контакты, чтобы мы могли с вами связаться</div>
                        <ul>
                            <li>
                                <div class=\"list-question\">Имя</div>
                                <div class=\"list-answer\">
                                    <input type=\"text\" name=\"name\" value=\"\"/>
                                </div>
                            </li>
                            <li>
                                <div class=\"list-question\">E-mail или Телефон</div>
                                <div class=\"list-answer\">
                                    <input type=\"text\" name=\"contact\" value=\"\"/>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class=\"list-group-item\">
                        <div class=\"description\">А теперь сам тест. Complete the dialogues putting the words in the right order.</div>
                        <ul>
                           <li>
                               <div class=\"list-question\">Where / Excuse / ATM / is / me / the / nearest</div>
                               <div class=\"list-answer\">
                                   <input type=\"text\" name=\"answer[0][]\" value=\"\"/>
                                </div>
                           </li>
                            <li>
                                <div class=\"list-question\">down / the / Go / street / two / left / blocks / and / turn</div>
                                <div class=\"list-answer\">
                                    <input type=\"text\" name=\"answer[0][]\" value=\"\"/>
                                </div>
                            </li>
                            <li>
                                <div class=\"list-question\">it / far / Is / very / from / far / here?</div>
                                <div class=\"list-answer\">
                                    <input type=\"text\" name=\"answer[0][]\" value=\"\"/>
                                </div>
                            </li>
                            <li>
                                <div class=\"list-question\">too / not / far</div>
                                <div class=\"list-answer\">
                                    <input type=\"text\" name=\"answer[0][]\" value=\"\"/>
                                </div>
                            </li>
                            <li>
                                <div class=\"list-question\">you / Thank / much. / very / for / Sorry / trouble.</div>
                                <div class=\"list-answer\">
                                    <input type=\"text\" name=\"answer[0][]\" value=\"\"/>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class=\"list-group-item\">
                        <div class=\"description\">Complete the following sentences with a word from the box.</div>
                        <div class=\"choose-box\"><span class=\"crossed\">change</span>, keep, become, go, have, start, take</div>
                        <div class=\"explanation\">
                            Example: I want to <strong>change</strong> my email address.
                        </div>
                        <ul>
                            <li>
                                <div class=\"list-question\">When did you <input type=\"text\" value=\"\" name=\"answer[1][]\"/> your business?</div>
                            </li>
                            <li>
                                <div class=\"list-question\">When I <input type=\"text\" value=\"\" name=\"answer[1][]\"/> famous, I'm going to buy a much bigger house.</div>
                            </li>
                            <li>
                                <div class=\"list-question\">You look tired. I think you should <input type=\"text\" value=\"\" name=\"answer[1][]\"/> a rest this weekend.</div>
                            </li>
                            <li>
                                <div class=\"list-question\">What are you going to study when you <input type=\"text\" value=\"\" name=\"answer[1][]\"/> to university?</div>
                            </li>
                            <li>
                                <div class=\"list-question\">You should go to bed and try to <input type=\"text\" value=\"\" name=\"answer[1][]\"/> warm</div>
                            </li>
                            <li>
                                <div class=\"list-question\">Go home and <input type=\"text\" value=\"\" name=\"answer[1][]\"/> these tablets three times a day</div>
                            </li>
                        </ul>
                    </li>
                    <li class=\"list-group-item\">
                        <div class=\"description\">Write these sentences in another way, begging in the way shown</div>
                        <div class=\"explanation\">
                            <div>Example: </div>
                            <div>They didn't give me the information I needed.</div>
                            <div>I wasn't given the information I needed.</div>
                        </div>
                        <ul>
                            <li>
                                <div class=\"list-question\">They asked me some difficult questions at the interview.</div>
                                <div class=\"list-answer\">
                                    <input type=\"text\" name=\"answer[2][]\" value=\"I \"/>
                                </div>
                            </li>
                            <li>
                                <div class=\"list-question\">Amy's colleagues gave her a present when she retired.</div>
                                <div class=\"list-answer\">
                                    <input type=\"text\" name=\"answer[2][]\" value=\"Amy \"/>
                                </div>
                            </li>
                            <li>
                                <div class=\"list-question\">Nobody told me about the meeting.</div>
                                <div class=\"list-answer\">
                                    <input type=\"text\" name=\"answer[2][]\" value=\"I wasn't \"/>
                                </div>
                            </li>
                            <li>
                                <div class=\"list-question\">How much will they pay you for your work?</div>
                                <div class=\"list-answer\">
                                    <input type=\"text\" name=\"answer[2][]\" value=\"How much will you \"/>
                                </div>
                            </li>
                            <li>
                                <div class=\"list-question\">I think they should have offered Tom the job.</div>
                                <div class=\"list-answer\">
                                    <input type=\"text\" name=\"answer[2][]\" value=\"I think Tom \"/>
                                </div>
                            </li>
                            <li>
                                <div class=\"list-question\">Has anybody shown you what to do?</div>
                                <div class=\"list-answer\">
                                    <input type=\"text\" name=\"answer[2][]\" value=\"Have you \"/>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class=\"list-group-item\">
                        <div class=\"description\">Complete the following sentences with a word from the box.</div>
                        <div class=\"choose-box\">accomplish, pointer, get, mentor, clicked, get out of, appreciative, get</div>
                        <div class=\"text\">
                            <div class=\"text-center title\"><strong>Having a Business Mentor</strong></div>
                            <div class=\"list-question\"><i>Alex</i> : Where are you going?</div>
                            <div class=\"list-question\"><i>Kenya</i> :  I’m going to meet my business mentor.</div>
                            <div class=\"list-question\"><i>Alex</i> : Your business mentor? What do you do with a business <input type=\"text\" name=\"answer[3][]\" value=\"\"/> ?</div>
                            <div class=\"list-question\"><i>Kenya</i> : Well, my mentor is like an advisor. We meet regularly and I <input type=\"text\" name=\"answer[3][]\" value=\"\"/> her feedback and guidance with my ideas <input type=\"text\" name=\"answer[3][]\" value=\"\"/> starting a business.</div>
                            <div class=\"list-question\"><i>Alex</i> : Oh, so you’re her protégé?</div>
                            <div class=\"list-question\"><i>Kenya</i> : No, I’m not. I simply go to her with my ideas and she helps me <input type=\"text\" name=\"answer[3][]\" value=\"\"/> them <input type=\"text\" name=\"answer[3][]\" value=\"\"/> . She’s a successful entrepreneur and I’m there to learn from her experience.</div>
                            <div class=\"list-question\"><i>Alex</i> : How did you <input type=\"text\" name=\"answer[3][]\" value=\"\"/> her to be your mentor? Were you already friends?</div>
                            <div class=\"list-question\"><i>Kenya</i> : No, I contacted her <input type=\"text\" name=\"answer[3][]\" value=\"\"/> , actually. I’ve read about her company and her many successes, and I wrote her a letter telling her about me and what I hope to <input type=\"text\" name=\"answer[3][]\" value=\"\"/> . She agreed to meet with me, and at that first meeting, we really <input type=\"text\" name=\"answer[3][]\" value=\"\"/> and now we meet once a month.</div>
                            <div class=\"list-question\"><i>Alex</i> : That’s very generous of her. What does she <input type=\"text\" name=\"answer[3][]\" value=\"\"/> it?</div>
                            <div class=\"list-question\"><i>Kenya</i> :  I’m not sure, but I think she enjoys giving me <input type=\"text\" name=\"answer[3][]\" value=\"\"/> and sharing her expertise. I’m very <input type=\"text\" name=\"answer[3][]\" value=\"\"/> and she says I remind her a lot of herself when she was my age. I take that as a huge compliment.</div>
                            <div class=\"list-question\"><i>Alex</i> : You should. If you’re like her, you’ll be a multi-millionaire <input type=\"text\" name=\"answer[3][]\" value=\"\"/> .</div>
                        </div>
                    </li>
                </ul>
                <div class=\"text-center\">
                    <button class=\"btn btn-lg btn-orange\" type=\"submit\">Отправить результаты</button>
                </div>
            </div>
        </div>
        </form>
    </div>
";
    }

    public function getTemplateName()
    {
        return "templates/englishTest.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "layouts/main.twig" %}*/
/* */
/* {% block content %}*/
/* */
/*     <div class="mar-top-xxl">*/
/*         <form method="post" action="{{ path('admin_logout') }}">*/
/*         <div class="container">*/
/*             <div>*/
/*                 <span>Пройдите тест чтобы мы могли узнать уровень вашего английського и предложить лучший вариант для обучения:</span>*/
/*             </div>*/
/*             <div class="questions">*/
/*                 <ul class="list-group">*/
/*                     <li class="list-group-item">*/
/*                         <div class="description">Перед тем как начать, пожалуйста, заполните ваши контакты, чтобы мы могли с вами связаться</div>*/
/*                         <ul>*/
/*                             <li>*/
/*                                 <div class="list-question">Имя</div>*/
/*                                 <div class="list-answer">*/
/*                                     <input type="text" name="name" value=""/>*/
/*                                 </div>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <div class="list-question">E-mail или Телефон</div>*/
/*                                 <div class="list-answer">*/
/*                                     <input type="text" name="contact" value=""/>*/
/*                                 </div>*/
/*                             </li>*/
/*                         </ul>*/
/*                     </li>*/
/*                     <li class="list-group-item">*/
/*                         <div class="description">А теперь сам тест. Complete the dialogues putting the words in the right order.</div>*/
/*                         <ul>*/
/*                            <li>*/
/*                                <div class="list-question">Where / Excuse / ATM / is / me / the / nearest</div>*/
/*                                <div class="list-answer">*/
/*                                    <input type="text" name="answer[0][]" value=""/>*/
/*                                 </div>*/
/*                            </li>*/
/*                             <li>*/
/*                                 <div class="list-question">down / the / Go / street / two / left / blocks / and / turn</div>*/
/*                                 <div class="list-answer">*/
/*                                     <input type="text" name="answer[0][]" value=""/>*/
/*                                 </div>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <div class="list-question">it / far / Is / very / from / far / here?</div>*/
/*                                 <div class="list-answer">*/
/*                                     <input type="text" name="answer[0][]" value=""/>*/
/*                                 </div>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <div class="list-question">too / not / far</div>*/
/*                                 <div class="list-answer">*/
/*                                     <input type="text" name="answer[0][]" value=""/>*/
/*                                 </div>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <div class="list-question">you / Thank / much. / very / for / Sorry / trouble.</div>*/
/*                                 <div class="list-answer">*/
/*                                     <input type="text" name="answer[0][]" value=""/>*/
/*                                 </div>*/
/*                             </li>*/
/*                         </ul>*/
/*                     </li>*/
/*                     <li class="list-group-item">*/
/*                         <div class="description">Complete the following sentences with a word from the box.</div>*/
/*                         <div class="choose-box"><span class="crossed">change</span>, keep, become, go, have, start, take</div>*/
/*                         <div class="explanation">*/
/*                             Example: I want to <strong>change</strong> my email address.*/
/*                         </div>*/
/*                         <ul>*/
/*                             <li>*/
/*                                 <div class="list-question">When did you <input type="text" value="" name="answer[1][]"/> your business?</div>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <div class="list-question">When I <input type="text" value="" name="answer[1][]"/> famous, I'm going to buy a much bigger house.</div>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <div class="list-question">You look tired. I think you should <input type="text" value="" name="answer[1][]"/> a rest this weekend.</div>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <div class="list-question">What are you going to study when you <input type="text" value="" name="answer[1][]"/> to university?</div>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <div class="list-question">You should go to bed and try to <input type="text" value="" name="answer[1][]"/> warm</div>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <div class="list-question">Go home and <input type="text" value="" name="answer[1][]"/> these tablets three times a day</div>*/
/*                             </li>*/
/*                         </ul>*/
/*                     </li>*/
/*                     <li class="list-group-item">*/
/*                         <div class="description">Write these sentences in another way, begging in the way shown</div>*/
/*                         <div class="explanation">*/
/*                             <div>Example: </div>*/
/*                             <div>They didn't give me the information I needed.</div>*/
/*                             <div>I wasn't given the information I needed.</div>*/
/*                         </div>*/
/*                         <ul>*/
/*                             <li>*/
/*                                 <div class="list-question">They asked me some difficult questions at the interview.</div>*/
/*                                 <div class="list-answer">*/
/*                                     <input type="text" name="answer[2][]" value="I "/>*/
/*                                 </div>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <div class="list-question">Amy's colleagues gave her a present when she retired.</div>*/
/*                                 <div class="list-answer">*/
/*                                     <input type="text" name="answer[2][]" value="Amy "/>*/
/*                                 </div>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <div class="list-question">Nobody told me about the meeting.</div>*/
/*                                 <div class="list-answer">*/
/*                                     <input type="text" name="answer[2][]" value="I wasn't "/>*/
/*                                 </div>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <div class="list-question">How much will they pay you for your work?</div>*/
/*                                 <div class="list-answer">*/
/*                                     <input type="text" name="answer[2][]" value="How much will you "/>*/
/*                                 </div>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <div class="list-question">I think they should have offered Tom the job.</div>*/
/*                                 <div class="list-answer">*/
/*                                     <input type="text" name="answer[2][]" value="I think Tom "/>*/
/*                                 </div>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <div class="list-question">Has anybody shown you what to do?</div>*/
/*                                 <div class="list-answer">*/
/*                                     <input type="text" name="answer[2][]" value="Have you "/>*/
/*                                 </div>*/
/*                             </li>*/
/*                         </ul>*/
/*                     </li>*/
/*                     <li class="list-group-item">*/
/*                         <div class="description">Complete the following sentences with a word from the box.</div>*/
/*                         <div class="choose-box">accomplish, pointer, get, mentor, clicked, get out of, appreciative, get</div>*/
/*                         <div class="text">*/
/*                             <div class="text-center title"><strong>Having a Business Mentor</strong></div>*/
/*                             <div class="list-question"><i>Alex</i> : Where are you going?</div>*/
/*                             <div class="list-question"><i>Kenya</i> :  I’m going to meet my business mentor.</div>*/
/*                             <div class="list-question"><i>Alex</i> : Your business mentor? What do you do with a business <input type="text" name="answer[3][]" value=""/> ?</div>*/
/*                             <div class="list-question"><i>Kenya</i> : Well, my mentor is like an advisor. We meet regularly and I <input type="text" name="answer[3][]" value=""/> her feedback and guidance with my ideas <input type="text" name="answer[3][]" value=""/> starting a business.</div>*/
/*                             <div class="list-question"><i>Alex</i> : Oh, so you’re her protégé?</div>*/
/*                             <div class="list-question"><i>Kenya</i> : No, I’m not. I simply go to her with my ideas and she helps me <input type="text" name="answer[3][]" value=""/> them <input type="text" name="answer[3][]" value=""/> . She’s a successful entrepreneur and I’m there to learn from her experience.</div>*/
/*                             <div class="list-question"><i>Alex</i> : How did you <input type="text" name="answer[3][]" value=""/> her to be your mentor? Were you already friends?</div>*/
/*                             <div class="list-question"><i>Kenya</i> : No, I contacted her <input type="text" name="answer[3][]" value=""/> , actually. I’ve read about her company and her many successes, and I wrote her a letter telling her about me and what I hope to <input type="text" name="answer[3][]" value=""/> . She agreed to meet with me, and at that first meeting, we really <input type="text" name="answer[3][]" value=""/> and now we meet once a month.</div>*/
/*                             <div class="list-question"><i>Alex</i> : That’s very generous of her. What does she <input type="text" name="answer[3][]" value=""/> it?</div>*/
/*                             <div class="list-question"><i>Kenya</i> :  I’m not sure, but I think she enjoys giving me <input type="text" name="answer[3][]" value=""/> and sharing her expertise. I’m very <input type="text" name="answer[3][]" value=""/> and she says I remind her a lot of herself when she was my age. I take that as a huge compliment.</div>*/
/*                             <div class="list-question"><i>Alex</i> : You should. If you’re like her, you’ll be a multi-millionaire <input type="text" name="answer[3][]" value=""/> .</div>*/
/*                         </div>*/
/*                     </li>*/
/*                 </ul>*/
/*                 <div class="text-center">*/
/*                     <button class="btn btn-lg btn-orange" type="submit">Отправить результаты</button>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         </form>*/
/*     </div>*/
/* {% endblock %}*/
/* */
