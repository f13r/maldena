<?php

/* ./partials/test.twig */
class __TwigTemplate_1c0bebe7825177d4d3f5cb96cb78720011810bbda0af71772990f7a637c679b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "        <div class=\"questions\">
            <ul class=\"list-group\">
                ";
        // line 3
        if (array_key_exists("user", $context)) {
            // line 4
            echo "                    <li class=\"list-group-item\">
                        <div class=\"description\">Перед тем как начать, пожалуйста, заполните Ваши контакты, чтобы мы могли с Вами связаться</div>
                        ";
            // line 6
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "getFlashBag", array()), "get", array(0 => "wrongEnglishTestForm"), "method")) {
                // line 7
                echo "                            <div class=\"red-color\">Пожалуйста, заполните поля отмеченые звездочками (имя и телефон)</div>
                        ";
            }
            // line 9
            echo "                        <ul>
                            <li>
                                <div class=\"list-question\">Имя <strong class=\"red-color\">*</strong></div>
                                <div class=\"list-answer\">
                                    <input type=\"text\" name=\"user[name]\" value=\"";
            // line 13
            if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "name", array(), "array", true, true)) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "name", array(), "array"), "html", null, true);
            }
            echo "\" placeholder=\"Как к Вам обращаться\"/>
                                </div>
                            </li>
                            <li>
                                <div class=\"list-question\">Телефон <strong class=\"red-color\">*</strong></div>
                                <div class=\"list-answer\">
                                    <input type=\"text\" class=\"js-app-feedback-phone\" name=\"user[phone]\" id=\"phone\" value=\"";
            // line 19
            if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "phone", array(), "array", true, true)) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "phone", array(), "array"), "html", null, true);
            }
            echo "\"/>
                                </div>
                            </li>
                            <li>
                                <div class=\"list-question\">Цель обучения</div>
                                <div class=\"list-answer\">
                                    <input type=\"text\" name=\"user[goals]\" placeholder=\"Пару слов о том, почему Вы решили улучшить свой английский\" value=\"";
            // line 25
            if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "goals", array(), "array", true, true)) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "goals", array(), "array"), "html", null, true);
            }
            echo "\"/>
                                </div>
                            </li>
                        </ul>
                    </li>
                ";
        }
        // line 31
        echo "                <li class=\"list-group-item\">
                    <div class=\"description\">А теперь сам тест. Составьте диалог, расположив слова в правильном порядке.</div>
                    <ul>
                        <li>
                            <div class=\"list-question\">Where / Excuse / ATM. / is / me. / the / nearest</div>
                            <div class=\"list-answer\">
                                <input type=\"text\" name=\"answer[0][]\" value=\"";
        // line 37
        if ($this->getAttribute($this->getAttribute((isset($context["answer"]) ? $context["answer"] : null), 0, array(), "array", false, true), 0, array(), "array", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["answer"]) ? $context["answer"] : $this->getContext($context, "answer")), 0, array(), "array"), 0, array(), "array"), "html", null, true);
        }
        echo "\"/>
                            </div>
                        </li>
                        <li>
                            <div class=\"list-question\">down / the / Go / street / two / left / blocks / and / turn.</div>
                            <div class=\"list-answer\">
                                <input type=\"text\" name=\"answer[0][]\" value=\"";
        // line 43
        if ($this->getAttribute($this->getAttribute((isset($context["answer"]) ? $context["answer"] : null), 0, array(), "array", false, true), 1, array(), "array", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["answer"]) ? $context["answer"] : $this->getContext($context, "answer")), 0, array(), "array"), 1, array(), "array"), "html", null, true);
        }
        echo "\"/>
                            </div>
                        </li>
                        <li>
                            <div class=\"list-question\">it / Is / very / from / far / here?</div>
                            <div class=\"list-answer\">
                                <input type=\"text\" name=\"answer[0][]\" value=\"";
        // line 49
        if ($this->getAttribute($this->getAttribute((isset($context["answer"]) ? $context["answer"] : null), 0, array(), "array", false, true), 2, array(), "array", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["answer"]) ? $context["answer"] : $this->getContext($context, "answer")), 0, array(), "array"), 2, array(), "array"), "html", null, true);
        }
        echo "\"/>
                            </div>
                        </li>
                        <li>
                            <div class=\"list-question\">too / Not / far.</div>
                            <div class=\"list-answer\">
                                <input type=\"text\" name=\"answer[0][]\" value=\"";
        // line 55
        if ($this->getAttribute($this->getAttribute((isset($context["answer"]) ? $context["answer"] : null), 0, array(), "array", false, true), 3, array(), "array", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["answer"]) ? $context["answer"] : $this->getContext($context, "answer")), 0, array(), "array"), 3, array(), "array"), "html", null, true);
        }
        echo "\"/>
                            </div>
                        </li>
                        <li>
                            <div class=\"list-question\">you / Thank / much. / very / for / Sorry / trouble.</div>
                            <div class=\"list-answer\">
                                <input type=\"text\" name=\"answer[0][]\" value=\"";
        // line 61
        if ($this->getAttribute($this->getAttribute((isset($context["answer"]) ? $context["answer"] : null), 0, array(), "array", false, true), 4, array(), "array", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["answer"]) ? $context["answer"] : $this->getContext($context, "answer")), 0, array(), "array"), 4, array(), "array"), "html", null, true);
        }
        echo "\"/>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class=\"list-group-item\">
                    <div class=\"description\">Составьте предложения, используя слова из прямоугольника.</div>
                    <div class=\"choose-box\"><span class=\"crossed\">change</span>, keep, become, go, have, start, take</div>
                    <div class=\"explanation\">
                        Example: I want to <strong>change</strong> my email address.
                    </div>
                    <ul>
                        <li>
                            <div class=\"list-question\">When did you <input type=\"text\" value=\"";
        // line 74
        if ($this->getAttribute($this->getAttribute((isset($context["answer"]) ? $context["answer"] : null), 1, array(), "array", false, true), 0, array(), "array", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["answer"]) ? $context["answer"] : $this->getContext($context, "answer")), 1, array(), "array"), 0, array(), "array"), "html", null, true);
        }
        echo "\" name=\"answer[1][]\"/> your business?</div>
                        </li>
                        <li>
                            <div class=\"list-question\">When I <input type=\"text\" value=\"";
        // line 77
        if ($this->getAttribute($this->getAttribute((isset($context["answer"]) ? $context["answer"] : null), 1, array(), "array", false, true), 1, array(), "array", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["answer"]) ? $context["answer"] : $this->getContext($context, "answer")), 1, array(), "array"), 1, array(), "array"), "html", null, true);
        }
        echo "\" name=\"answer[1][]\"/> famous, I'm going to buy a much bigger house.</div>
                        </li>
                        <li>
                            <div class=\"list-question\">You look tired. I think you should <input type=\"text\" value=\"";
        // line 80
        if ($this->getAttribute($this->getAttribute((isset($context["answer"]) ? $context["answer"] : null), 1, array(), "array", false, true), 2, array(), "array", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["answer"]) ? $context["answer"] : $this->getContext($context, "answer")), 1, array(), "array"), 2, array(), "array"), "html", null, true);
        }
        echo "\" name=\"answer[1][]\"/> a rest this weekend.</div>
                        </li>
                        <li>
                            <div class=\"list-question\">What are you going to study when you <input type=\"text\" value=\"";
        // line 83
        if ($this->getAttribute($this->getAttribute((isset($context["answer"]) ? $context["answer"] : null), 1, array(), "array", false, true), 3, array(), "array", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["answer"]) ? $context["answer"] : $this->getContext($context, "answer")), 1, array(), "array"), 3, array(), "array"), "html", null, true);
        }
        echo "\" name=\"answer[1][]\"/> to university?</div>
                        </li>
                        <li>
                            <div class=\"list-question\">You should go to bed and try to <input type=\"text\" value=\"";
        // line 86
        if ($this->getAttribute($this->getAttribute((isset($context["answer"]) ? $context["answer"] : null), 1, array(), "array", false, true), 4, array(), "array", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["answer"]) ? $context["answer"] : $this->getContext($context, "answer")), 1, array(), "array"), 4, array(), "array"), "html", null, true);
        }
        echo "\" name=\"answer[1][]\"/> warm</div>
                        </li>
                        <li>
                            <div class=\"list-question\">Go home and <input type=\"text\" value=\"";
        // line 89
        if ($this->getAttribute($this->getAttribute((isset($context["answer"]) ? $context["answer"] : null), 1, array(), "array", false, true), 5, array(), "array", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["answer"]) ? $context["answer"] : $this->getContext($context, "answer")), 1, array(), "array"), 5, array(), "array"), "html", null, true);
        }
        echo "\" name=\"answer[1][]\"/> these tablets three times a day</div>
                        </li>
                    </ul>
                </li>
                <li class=\"list-group-item\">
                    <div class=\"description\">Задайте вопрос к выделенному слову.</div>
                    <div class=\"explanation\">
                        <div>Example:</div>
                        <div>My name is <strong>Lora</strong>.</div>
                        <div>What is your name?</div>
                    </div>
                    <ul>
                        <li>
                            <div class=\"list-question\">Hello. My name is <strong>Helena</strong>.</div>
                            <div class=\"list-answer\">
                                <input type=\"text\" name=\"answer[4][]\" value=\"";
        // line 104
        if ($this->getAttribute($this->getAttribute((isset($context["answer"]) ? $context["answer"] : null), 4, array(), "array", false, true), 0, array(), "array", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["answer"]) ? $context["answer"] : $this->getContext($context, "answer")), 4, array(), "array"), 0, array(), "array"), "html", null, true);
        }
        echo "\"/>
                            </div>
                        </li>
                        <li>
                            <div class=\"list-question\">I am from <strong>England</strong>.</div>
                            <div class=\"list-answer\">
                                <input type=\"text\" name=\"answer[4][]\" value=\"";
        // line 110
        if ($this->getAttribute($this->getAttribute((isset($context["answer"]) ? $context["answer"] : null), 4, array(), "array", false, true), 1, array(), "array", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["answer"]) ? $context["answer"] : $this->getContext($context, "answer")), 4, array(), "array"), 1, array(), "array"), "html", null, true);
        }
        echo "\"/>
                            </div>
                        </li>
                        <li>
                            <div class=\"list-question\">I work as <strong>manager</strong> for a big company.</div>
                            <div class=\"list-answer\">
                                <input type=\"text\" name=\"answer[4][]\" value=\"";
        // line 116
        if ($this->getAttribute($this->getAttribute((isset($context["answer"]) ? $context["answer"] : null), 4, array(), "array", false, true), 2, array(), "array", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["answer"]) ? $context["answer"] : $this->getContext($context, "answer")), 4, array(), "array"), 2, array(), "array"), "html", null, true);
        }
        echo "\"/>
                            </div>
                        </li>
                        <li>
                            <div class=\"list-question\">I work as manager for a <strong>big</strong> company.</div>
                            <div class=\"list-answer\">
                                <input type=\"text\" name=\"answer[4][]\" value=\"";
        // line 122
        if ($this->getAttribute($this->getAttribute((isset($context["answer"]) ? $context["answer"] : null), 4, array(), "array", false, true), 3, array(), "array", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["answer"]) ? $context["answer"] : $this->getContext($context, "answer")), 4, array(), "array"), 3, array(), "array"), "html", null, true);
        }
        echo "\"/>
                            </div>
                        </li>
                        <li>
                            <div class=\"list-question\">My working day starts at <strong>9:00</strong> and finishes pretty late at 19:00.</div>
                            <div class=\"list-answer\">
                                <input type=\"text\" name=\"answer[4][]\" value=\"";
        // line 128
        if ($this->getAttribute($this->getAttribute((isset($context["answer"]) ? $context["answer"] : null), 4, array(), "array", false, true), 4, array(), "array", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["answer"]) ? $context["answer"] : $this->getContext($context, "answer")), 4, array(), "array"), 4, array(), "array"), "html", null, true);
        }
        echo "\"/>
                            </div>
                        </li>
                        <li>
                            <div class=\"list-question\">My working day starts at 9:00 and finishes pretty late at <strong>19:00</strong>.</div>
                            <div class=\"list-answer\">
                                <input type=\"text\" name=\"answer[4][]\" value=\"";
        // line 134
        if ($this->getAttribute($this->getAttribute((isset($context["answer"]) ? $context["answer"] : null), 4, array(), "array", false, true), 5, array(), "array", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["answer"]) ? $context["answer"] : $this->getContext($context, "answer")), 4, array(), "array"), 5, array(), "array"), "html", null, true);
        }
        echo "\"/>
                            </div>
                        </li>
                        <li>
                            <div class=\"list-question\">Sometimes I am late for work because of <strong>traffic jam</strong>.</div>
                            <div class=\"list-answer\">
                                <input type=\"text\" name=\"answer[4][]\" value=\"";
        // line 140
        if ($this->getAttribute($this->getAttribute((isset($context["answer"]) ? $context["answer"] : null), 4, array(), "array", false, true), 6, array(), "array", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["answer"]) ? $context["answer"] : $this->getContext($context, "answer")), 4, array(), "array"), 6, array(), "array"), "html", null, true);
        }
        echo "\"/>
                            </div>
                        </li>
                        <li>
                            <div class=\"list-question\">When I am in the office I start with <strong>E-mails</strong>.
                                It is always interesting and I get to know something new.</div>
                            <div class=\"list-answer\">
                                <input type=\"text\" name=\"answer[4][]\" value=\"";
        // line 147
        if ($this->getAttribute($this->getAttribute((isset($context["answer"]) ? $context["answer"] : null), 4, array(), "array", false, true), 7, array(), "array", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["answer"]) ? $context["answer"] : $this->getContext($context, "answer")), 4, array(), "array"), 7, array(), "array"), "html", null, true);
        }
        echo "\"/>
                            </div>
                        </li>
                        <li>
                            <div class=\"list-question\">When I have free time I have a rest in <strong>cafe</strong>.
                                It’s pretty comfortable.</div>
                            <div class=\"list-answer\">
                                <input type=\"text\" name=\"answer[4][]\" value=\"";
        // line 154
        if ($this->getAttribute($this->getAttribute((isset($context["answer"]) ? $context["answer"] : null), 4, array(), "array", false, true), 8, array(), "array", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["answer"]) ? $context["answer"] : $this->getContext($context, "answer")), 4, array(), "array"), 8, array(), "array"), "html", null, true);
        }
        echo "\"/>
                            </div>
                        </li>
                        <li>
                            <div class=\"list-question\">I like <strong>having coffeee</strong> very much after tense day.</div>
                            <div class=\"list-answer\">
                                <input type=\"text\" name=\"answer[4][]\" value=\"";
        // line 160
        if ($this->getAttribute($this->getAttribute((isset($context["answer"]) ? $context["answer"] : null), 4, array(), "array", false, true), 9, array(), "array", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["answer"]) ? $context["answer"] : $this->getContext($context, "answer")), 4, array(), "array"), 9, array(), "array"), "html", null, true);
        }
        echo "\"/>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class=\"list-group-item\">
                    <div class=\"description\">Write these sentences in another way, beginning in the way shown</div>
                    <div class=\"explanation\">
                        <div>Example: </div>
                        <div>They didn't give me the information I needed.</div>
                        <div>I wasn't given the information I needed.</div>
                    </div>
                    <ul>
                        <li>
                            <div class=\"list-question\">They asked me some difficult questions at the interview.</div>
                            <div class=\"list-answer\">
                                ";
        // line 176
        if ($this->getAttribute($this->getAttribute((isset($context["answer"]) ? $context["answer"] : null), 2, array(), "array", false, true), 0, array(), "array", true, true)) {
            // line 177
            echo "                                    <input type=\"text\" name=\"answer[2][]\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["answer"]) ? $context["answer"] : $this->getContext($context, "answer")), 2, array(), "array"), 0, array(), "array"), "html", null, true);
            echo "\"/>
                                ";
        } else {
            // line 179
            echo "                                    <input type=\"text\" name=\"answer[2][]\" value=\"I \"/>
                                ";
        }
        // line 181
        echo "                            </div>
                        </li>
                        <li>
                            <div class=\"list-question\">Amy's colleagues gave her a present when she retired.</div>
                            <div class=\"list-answer\">
                                ";
        // line 186
        if ($this->getAttribute($this->getAttribute((isset($context["answer"]) ? $context["answer"] : null), 2, array(), "array", false, true), 1, array(), "array", true, true)) {
            // line 187
            echo "                                    <input type=\"text\" name=\"answer[2][]\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["answer"]) ? $context["answer"] : $this->getContext($context, "answer")), 2, array(), "array"), 1, array(), "array"), "html", null, true);
            echo "\"/>
                                ";
        } else {
            // line 189
            echo "                                    <input type=\"text\" name=\"answer[2][]\" value=\"Amy \"/>
                                ";
        }
        // line 191
        echo "                            </div>
                        </li>
                        <li>
                            <div class=\"list-question\">Nobody told me about the meeting.</div>
                            <div class=\"list-answer\">
                                ";
        // line 196
        if ($this->getAttribute($this->getAttribute((isset($context["answer"]) ? $context["answer"] : null), 2, array(), "array", false, true), 2, array(), "array", true, true)) {
            // line 197
            echo "                                    <input type=\"text\" name=\"answer[2][]\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["answer"]) ? $context["answer"] : $this->getContext($context, "answer")), 2, array(), "array"), 2, array(), "array"), "html", null, true);
            echo "\"/>
                                ";
        } else {
            // line 199
            echo "                                    <input type=\"text\" name=\"answer[2][]\" value=\"I wasn't \"/>
                                ";
        }
        // line 201
        echo "                            </div>
                        </li>
                        <li>
                            <div class=\"list-question\">How much will they pay you for your work?</div>
                            <div class=\"list-answer\">
                                ";
        // line 206
        if ($this->getAttribute($this->getAttribute((isset($context["answer"]) ? $context["answer"] : null), 2, array(), "array", false, true), 3, array(), "array", true, true)) {
            // line 207
            echo "                                    <input type=\"text\" name=\"answer[2][]\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["answer"]) ? $context["answer"] : $this->getContext($context, "answer")), 2, array(), "array"), 3, array(), "array"), "html", null, true);
            echo "\"/>
                                ";
        } else {
            // line 209
            echo "                                    <input type=\"text\" name=\"answer[2][]\" value=\"How much will you \"/>
                                ";
        }
        // line 211
        echo "                            </div>
                        </li>
                        <li>
                            <div class=\"list-question\">I think they should have offered Tom the job.</div>
                            <div class=\"list-answer\">
                                ";
        // line 216
        if ($this->getAttribute($this->getAttribute((isset($context["answer"]) ? $context["answer"] : null), 2, array(), "array", false, true), 4, array(), "array", true, true)) {
            // line 217
            echo "                                    <input type=\"text\" name=\"answer[2][]\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["answer"]) ? $context["answer"] : $this->getContext($context, "answer")), 2, array(), "array"), 4, array(), "array"), "html", null, true);
            echo "\"/>
                                ";
        } else {
            // line 219
            echo "                                    <input type=\"text\" name=\"answer[2][]\" value=\"I think Tom \"/>
                                ";
        }
        // line 221
        echo "                            </div>
                        </li>
                        <li>
                            <div class=\"list-question\">Has anybody shown you what to do?</div>
                            <div class=\"list-answer\">
                                ";
        // line 226
        if ($this->getAttribute($this->getAttribute((isset($context["answer"]) ? $context["answer"] : null), 2, array(), "array", false, true), 5, array(), "array", true, true)) {
            // line 227
            echo "                                    <input type=\"text\" name=\"answer[2][]\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["answer"]) ? $context["answer"] : $this->getContext($context, "answer")), 2, array(), "array"), 5, array(), "array"), "html", null, true);
            echo "\"/>
                                ";
        } else {
            // line 229
            echo "                                    <input type=\"text\" name=\"answer[2][]\" value=\"Have you \"/>
                                ";
        }
        // line 231
        echo "                            </div>
                        </li>
                    </ul>
                </li>
                <li class=\"list-group-item\">
                    <div class=\"description\">Complete the following sentences with a word from the box.</div>
                    <div class=\"choose-box\">accomplish, on, pointer, get, mentor, clicked, get out of, appreciative, get(2), in no time flat, hash out, out of the blue</div>
                    <div class=\"text\">
                        <div class=\"text-center title\"><strong>Having a Business Mentor</strong></div>
                        <div class=\"list-question\"><i>Alex</i> : Where are you going?</div>
                        <div class=\"list-question\"><i>Kenya</i> :  I’m going to meet my business mentor.</div>
                        <div class=\"list-question\"><i>Alex</i> : Your business mentor? What do you do with a business <input type=\"text\" name=\"answer[3][]\" value=\"";
        // line 242
        if ($this->getAttribute($this->getAttribute((isset($context["answer"]) ? $context["answer"] : null), 3, array(), "array", false, true), 0, array(), "array", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["answer"]) ? $context["answer"] : $this->getContext($context, "answer")), 3, array(), "array"), 0, array(), "array"), "html", null, true);
        }
        echo "\"/> ?</div>
                        <div class=\"list-question\"><i>Kenya</i> : Well, my mentor is like an advisor. We meet regularly and I <input type=\"text\" name=\"answer[3][]\" value=\"";
        // line 243
        if ($this->getAttribute($this->getAttribute((isset($context["answer"]) ? $context["answer"] : null), 3, array(), "array", false, true), 1, array(), "array", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["answer"]) ? $context["answer"] : $this->getContext($context, "answer")), 3, array(), "array"), 1, array(), "array"), "html", null, true);
        }
        echo "\"/> her feedback and guidance with my ideas <input type=\"text\" name=\"answer[3][]\" value=\"";
        if ($this->getAttribute($this->getAttribute((isset($context["answer"]) ? $context["answer"] : null), 3, array(), "array", false, true), 2, array(), "array", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["answer"]) ? $context["answer"] : $this->getContext($context, "answer")), 3, array(), "array"), 2, array(), "array"), "html", null, true);
        }
        echo "\"/> starting a business.</div>
                        <div class=\"list-question\"><i>Alex</i> : Oh, so you’re her protégé?</div>
                        <div class=\"list-question\"><i>Kenya</i> : No, I’m not. I simply go to her with my ideas and she helps me <input type=\"text\" name=\"answer[3][]\" value=\"";
        // line 245
        if ($this->getAttribute($this->getAttribute((isset($context["answer"]) ? $context["answer"] : null), 3, array(), "array", false, true), 3, array(), "array", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["answer"]) ? $context["answer"] : $this->getContext($context, "answer")), 3, array(), "array"), 3, array(), "array"), "html", null, true);
        }
        echo "\"/> them <input type=\"text\" name=\"answer[3][]\" value=\"";
        if ($this->getAttribute($this->getAttribute((isset($context["answer"]) ? $context["answer"] : null), 3, array(), "array", false, true), 4, array(), "array", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["answer"]) ? $context["answer"] : $this->getContext($context, "answer")), 3, array(), "array"), 4, array(), "array"), "html", null, true);
        }
        echo "\"/> . She’s a successful entrepreneur and I’m there to learn from her experience.</div>
                        <div class=\"list-question\"><i>Alex</i> : How did you <input type=\"text\" name=\"answer[3][]\" value=\"";
        // line 246
        if ($this->getAttribute($this->getAttribute((isset($context["answer"]) ? $context["answer"] : null), 3, array(), "array", false, true), 5, array(), "array", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["answer"]) ? $context["answer"] : $this->getContext($context, "answer")), 3, array(), "array"), 5, array(), "array"), "html", null, true);
        }
        echo "\"/> her to be your mentor? Were you already friends?</div>
                        <div class=\"list-question\"><i>Kenya</i> : No, I contacted her <input type=\"text\" name=\"answer[3][]\" value=\"";
        // line 247
        if ($this->getAttribute($this->getAttribute((isset($context["answer"]) ? $context["answer"] : null), 3, array(), "array", false, true), 6, array(), "array", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["answer"]) ? $context["answer"] : $this->getContext($context, "answer")), 3, array(), "array"), 6, array(), "array"), "html", null, true);
        }
        echo "\"/> , actually. I’ve read about her company and her many successes, and I wrote her a letter telling her about me and what I hope to <input type=\"text\" name=\"answer[3][]\" value=\"";
        if ($this->getAttribute($this->getAttribute((isset($context["answer"]) ? $context["answer"] : null), 3, array(), "array", false, true), 7, array(), "array", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["answer"]) ? $context["answer"] : $this->getContext($context, "answer")), 3, array(), "array"), 7, array(), "array"), "html", null, true);
        }
        echo "\"/> . She agreed to meet with me, and at that first meeting, we really <input type=\"text\" name=\"answer[3][]\" value=\"";
        if ($this->getAttribute($this->getAttribute((isset($context["answer"]) ? $context["answer"] : null), 3, array(), "array", false, true), 8, array(), "array", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["answer"]) ? $context["answer"] : $this->getContext($context, "answer")), 3, array(), "array"), 8, array(), "array"), "html", null, true);
        }
        echo "\"/> and now we meet once a month.</div>
                        <div class=\"list-question\"><i>Alex</i> : That’s very generous of her. What does she <input type=\"text\" name=\"answer[3][]\" value=\"";
        // line 248
        if ($this->getAttribute($this->getAttribute((isset($context["answer"]) ? $context["answer"] : null), 3, array(), "array", false, true), 9, array(), "array", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["answer"]) ? $context["answer"] : $this->getContext($context, "answer")), 3, array(), "array"), 9, array(), "array"), "html", null, true);
        }
        echo "\"/> from it?</div>
                        <div class=\"list-question\"><i>Kenya</i> :  I’m not sure, but I think she enjoys giving me <input type=\"text\" name=\"answer[3][]\" value=\"";
        // line 249
        if ($this->getAttribute($this->getAttribute((isset($context["answer"]) ? $context["answer"] : null), 3, array(), "array", false, true), 10, array(), "array", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["answer"]) ? $context["answer"] : $this->getContext($context, "answer")), 3, array(), "array"), 10, array(), "array"), "html", null, true);
        }
        echo "\"/> and sharing her expertise. I’m very <input type=\"text\" name=\"answer[3][]\" value=\"";
        if ($this->getAttribute($this->getAttribute((isset($context["answer"]) ? $context["answer"] : null), 3, array(), "array", false, true), 11, array(), "array", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["answer"]) ? $context["answer"] : $this->getContext($context, "answer")), 3, array(), "array"), 11, array(), "array"), "html", null, true);
        }
        echo "\"/> and she says I remind her a lot of herself when she was my age. I take that as a huge compliment.</div>
                        <div class=\"list-question\"><i>Alex</i> : You should. If you’re like her, you’ll be a multi-millionaire <input type=\"text\" name=\"answer[3][]\" value=\"";
        // line 250
        if ($this->getAttribute($this->getAttribute((isset($context["answer"]) ? $context["answer"] : null), 3, array(), "array", false, true), 12, array(), "array", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["answer"]) ? $context["answer"] : $this->getContext($context, "answer")), 3, array(), "array"), 12, array(), "array"), "html", null, true);
        }
        echo "\"/> .</div>
                    </div>
                </li>
            </ul>
        </div>

";
    }

    public function getTemplateName()
    {
        return "./partials/test.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  509 => 250,  499 => 249,  493 => 248,  479 => 247,  473 => 246,  463 => 245,  452 => 243,  446 => 242,  433 => 231,  429 => 229,  423 => 227,  421 => 226,  414 => 221,  410 => 219,  404 => 217,  402 => 216,  395 => 211,  391 => 209,  385 => 207,  383 => 206,  376 => 201,  372 => 199,  366 => 197,  364 => 196,  357 => 191,  353 => 189,  347 => 187,  345 => 186,  338 => 181,  334 => 179,  328 => 177,  326 => 176,  305 => 160,  294 => 154,  282 => 147,  270 => 140,  259 => 134,  248 => 128,  237 => 122,  226 => 116,  215 => 110,  204 => 104,  184 => 89,  176 => 86,  168 => 83,  160 => 80,  152 => 77,  144 => 74,  126 => 61,  115 => 55,  104 => 49,  93 => 43,  82 => 37,  74 => 31,  63 => 25,  52 => 19,  41 => 13,  35 => 9,  31 => 7,  29 => 6,  25 => 4,  23 => 3,  19 => 1,);
    }
}
/*         <div class="questions">*/
/*             <ul class="list-group">*/
/*                 {% if user is defined %}*/
/*                     <li class="list-group-item">*/
/*                         <div class="description">Перед тем как начать, пожалуйста, заполните Ваши контакты, чтобы мы могли с Вами связаться</div>*/
/*                         {% if app.session.getFlashBag.get('wrongEnglishTestForm') %}*/
/*                             <div class="red-color">Пожалуйста, заполните поля отмеченые звездочками (имя и телефон)</div>*/
/*                         {% endif %}*/
/*                         <ul>*/
/*                             <li>*/
/*                                 <div class="list-question">Имя <strong class="red-color">*</strong></div>*/
/*                                 <div class="list-answer">*/
/*                                     <input type="text" name="user[name]" value="{% if user['name'] is defined %}{{ user['name'] }}{% endif %}" placeholder="Как к Вам обращаться"/>*/
/*                                 </div>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <div class="list-question">Телефон <strong class="red-color">*</strong></div>*/
/*                                 <div class="list-answer">*/
/*                                     <input type="text" class="js-app-feedback-phone" name="user[phone]" id="phone" value="{% if user['phone'] is defined %}{{ user['phone'] }}{% endif %}"/>*/
/*                                 </div>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <div class="list-question">Цель обучения</div>*/
/*                                 <div class="list-answer">*/
/*                                     <input type="text" name="user[goals]" placeholder="Пару слов о том, почему Вы решили улучшить свой английский" value="{% if user['goals'] is defined %}{{ user['goals'] }}{% endif %}"/>*/
/*                                 </div>*/
/*                             </li>*/
/*                         </ul>*/
/*                     </li>*/
/*                 {% endif %}*/
/*                 <li class="list-group-item">*/
/*                     <div class="description">А теперь сам тест. Составьте диалог, расположив слова в правильном порядке.</div>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <div class="list-question">Where / Excuse / ATM. / is / me. / the / nearest</div>*/
/*                             <div class="list-answer">*/
/*                                 <input type="text" name="answer[0][]" value="{% if answer[0][0] is defined %}{{ answer[0][0] }}{% endif %}"/>*/
/*                             </div>*/
/*                         </li>*/
/*                         <li>*/
/*                             <div class="list-question">down / the / Go / street / two / left / blocks / and / turn.</div>*/
/*                             <div class="list-answer">*/
/*                                 <input type="text" name="answer[0][]" value="{% if answer[0][1] is defined  %}{{ answer[0][1] }}{% endif %}"/>*/
/*                             </div>*/
/*                         </li>*/
/*                         <li>*/
/*                             <div class="list-question">it / Is / very / from / far / here?</div>*/
/*                             <div class="list-answer">*/
/*                                 <input type="text" name="answer[0][]" value="{% if answer[0][2] is defined  %}{{ answer[0][2] }}{% endif %}"/>*/
/*                             </div>*/
/*                         </li>*/
/*                         <li>*/
/*                             <div class="list-question">too / Not / far.</div>*/
/*                             <div class="list-answer">*/
/*                                 <input type="text" name="answer[0][]" value="{% if answer[0][3] is defined  %}{{ answer[0][3] }}{% endif %}"/>*/
/*                             </div>*/
/*                         </li>*/
/*                         <li>*/
/*                             <div class="list-question">you / Thank / much. / very / for / Sorry / trouble.</div>*/
/*                             <div class="list-answer">*/
/*                                 <input type="text" name="answer[0][]" value="{% if answer[0][4] is defined  %}{{ answer[0][4] }}{% endif %}"/>*/
/*                             </div>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </li>*/
/*                 <li class="list-group-item">*/
/*                     <div class="description">Составьте предложения, используя слова из прямоугольника.</div>*/
/*                     <div class="choose-box"><span class="crossed">change</span>, keep, become, go, have, start, take</div>*/
/*                     <div class="explanation">*/
/*                         Example: I want to <strong>change</strong> my email address.*/
/*                     </div>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <div class="list-question">When did you <input type="text" value="{% if answer[1][0] is defined  %}{{ answer[1][0] }}{% endif %}" name="answer[1][]"/> your business?</div>*/
/*                         </li>*/
/*                         <li>*/
/*                             <div class="list-question">When I <input type="text" value="{% if answer[1][1] is defined  %}{{ answer[1][1] }}{% endif %}" name="answer[1][]"/> famous, I'm going to buy a much bigger house.</div>*/
/*                         </li>*/
/*                         <li>*/
/*                             <div class="list-question">You look tired. I think you should <input type="text" value="{% if answer[1][2] is defined  %}{{ answer[1][2] }}{% endif %}" name="answer[1][]"/> a rest this weekend.</div>*/
/*                         </li>*/
/*                         <li>*/
/*                             <div class="list-question">What are you going to study when you <input type="text" value="{% if answer[1][3] is defined  %}{{ answer[1][3] }}{% endif %}" name="answer[1][]"/> to university?</div>*/
/*                         </li>*/
/*                         <li>*/
/*                             <div class="list-question">You should go to bed and try to <input type="text" value="{% if answer[1][4] is defined  %}{{ answer[1][4] }}{% endif %}" name="answer[1][]"/> warm</div>*/
/*                         </li>*/
/*                         <li>*/
/*                             <div class="list-question">Go home and <input type="text" value="{% if answer[1][5] is defined  %}{{ answer[1][5] }}{% endif %}" name="answer[1][]"/> these tablets three times a day</div>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </li>*/
/*                 <li class="list-group-item">*/
/*                     <div class="description">Задайте вопрос к выделенному слову.</div>*/
/*                     <div class="explanation">*/
/*                         <div>Example:</div>*/
/*                         <div>My name is <strong>Lora</strong>.</div>*/
/*                         <div>What is your name?</div>*/
/*                     </div>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <div class="list-question">Hello. My name is <strong>Helena</strong>.</div>*/
/*                             <div class="list-answer">*/
/*                                 <input type="text" name="answer[4][]" value="{% if answer[4][0] is defined %}{{ answer[4][0] }}{% endif %}"/>*/
/*                             </div>*/
/*                         </li>*/
/*                         <li>*/
/*                             <div class="list-question">I am from <strong>England</strong>.</div>*/
/*                             <div class="list-answer">*/
/*                                 <input type="text" name="answer[4][]" value="{% if answer[4][1] is defined %}{{ answer[4][1] }}{% endif %}"/>*/
/*                             </div>*/
/*                         </li>*/
/*                         <li>*/
/*                             <div class="list-question">I work as <strong>manager</strong> for a big company.</div>*/
/*                             <div class="list-answer">*/
/*                                 <input type="text" name="answer[4][]" value="{% if answer[4][2] is defined %}{{ answer[4][2] }}{% endif %}"/>*/
/*                             </div>*/
/*                         </li>*/
/*                         <li>*/
/*                             <div class="list-question">I work as manager for a <strong>big</strong> company.</div>*/
/*                             <div class="list-answer">*/
/*                                 <input type="text" name="answer[4][]" value="{% if answer[4][3] is defined %}{{ answer[4][3] }}{% endif %}"/>*/
/*                             </div>*/
/*                         </li>*/
/*                         <li>*/
/*                             <div class="list-question">My working day starts at <strong>9:00</strong> and finishes pretty late at 19:00.</div>*/
/*                             <div class="list-answer">*/
/*                                 <input type="text" name="answer[4][]" value="{% if answer[4][4] is defined %}{{ answer[4][4] }}{% endif %}"/>*/
/*                             </div>*/
/*                         </li>*/
/*                         <li>*/
/*                             <div class="list-question">My working day starts at 9:00 and finishes pretty late at <strong>19:00</strong>.</div>*/
/*                             <div class="list-answer">*/
/*                                 <input type="text" name="answer[4][]" value="{% if answer[4][5] is defined %}{{ answer[4][5] }}{% endif %}"/>*/
/*                             </div>*/
/*                         </li>*/
/*                         <li>*/
/*                             <div class="list-question">Sometimes I am late for work because of <strong>traffic jam</strong>.</div>*/
/*                             <div class="list-answer">*/
/*                                 <input type="text" name="answer[4][]" value="{% if answer[4][6] is defined %}{{ answer[4][6] }}{% endif %}"/>*/
/*                             </div>*/
/*                         </li>*/
/*                         <li>*/
/*                             <div class="list-question">When I am in the office I start with <strong>E-mails</strong>.*/
/*                                 It is always interesting and I get to know something new.</div>*/
/*                             <div class="list-answer">*/
/*                                 <input type="text" name="answer[4][]" value="{% if answer[4][7] is defined %}{{ answer[4][7] }}{% endif %}"/>*/
/*                             </div>*/
/*                         </li>*/
/*                         <li>*/
/*                             <div class="list-question">When I have free time I have a rest in <strong>cafe</strong>.*/
/*                                 It’s pretty comfortable.</div>*/
/*                             <div class="list-answer">*/
/*                                 <input type="text" name="answer[4][]" value="{% if answer[4][8] is defined %}{{ answer[4][8] }}{% endif %}"/>*/
/*                             </div>*/
/*                         </li>*/
/*                         <li>*/
/*                             <div class="list-question">I like <strong>having coffeee</strong> very much after tense day.</div>*/
/*                             <div class="list-answer">*/
/*                                 <input type="text" name="answer[4][]" value="{% if answer[4][9] is defined %}{{ answer[4][9] }}{% endif %}"/>*/
/*                             </div>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </li>*/
/*                 <li class="list-group-item">*/
/*                     <div class="description">Write these sentences in another way, beginning in the way shown</div>*/
/*                     <div class="explanation">*/
/*                         <div>Example: </div>*/
/*                         <div>They didn't give me the information I needed.</div>*/
/*                         <div>I wasn't given the information I needed.</div>*/
/*                     </div>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <div class="list-question">They asked me some difficult questions at the interview.</div>*/
/*                             <div class="list-answer">*/
/*                                 {% if answer[2][0] is defined %}*/
/*                                     <input type="text" name="answer[2][]" value="{{ answer[2][0] }}"/>*/
/*                                 {% else %}*/
/*                                     <input type="text" name="answer[2][]" value="I "/>*/
/*                                 {% endif %}*/
/*                             </div>*/
/*                         </li>*/
/*                         <li>*/
/*                             <div class="list-question">Amy's colleagues gave her a present when she retired.</div>*/
/*                             <div class="list-answer">*/
/*                                 {% if answer[2][1] is defined %}*/
/*                                     <input type="text" name="answer[2][]" value="{{ answer[2][1] }}"/>*/
/*                                 {% else %}*/
/*                                     <input type="text" name="answer[2][]" value="Amy "/>*/
/*                                 {% endif %}*/
/*                             </div>*/
/*                         </li>*/
/*                         <li>*/
/*                             <div class="list-question">Nobody told me about the meeting.</div>*/
/*                             <div class="list-answer">*/
/*                                 {% if answer[2][2] is defined %}*/
/*                                     <input type="text" name="answer[2][]" value="{{ answer[2][2] }}"/>*/
/*                                 {% else %}*/
/*                                     <input type="text" name="answer[2][]" value="I wasn't "/>*/
/*                                 {% endif %}*/
/*                             </div>*/
/*                         </li>*/
/*                         <li>*/
/*                             <div class="list-question">How much will they pay you for your work?</div>*/
/*                             <div class="list-answer">*/
/*                                 {% if answer[2][3] is defined %}*/
/*                                     <input type="text" name="answer[2][]" value="{{ answer[2][3] }}"/>*/
/*                                 {% else %}*/
/*                                     <input type="text" name="answer[2][]" value="How much will you "/>*/
/*                                 {% endif %}*/
/*                             </div>*/
/*                         </li>*/
/*                         <li>*/
/*                             <div class="list-question">I think they should have offered Tom the job.</div>*/
/*                             <div class="list-answer">*/
/*                                 {% if answer[2][4] is defined %}*/
/*                                     <input type="text" name="answer[2][]" value="{{ answer[2][4] }}"/>*/
/*                                 {% else %}*/
/*                                     <input type="text" name="answer[2][]" value="I think Tom "/>*/
/*                                 {% endif %}*/
/*                             </div>*/
/*                         </li>*/
/*                         <li>*/
/*                             <div class="list-question">Has anybody shown you what to do?</div>*/
/*                             <div class="list-answer">*/
/*                                 {% if answer[2][5] is defined %}*/
/*                                     <input type="text" name="answer[2][]" value="{{ answer[2][5] }}"/>*/
/*                                 {% else %}*/
/*                                     <input type="text" name="answer[2][]" value="Have you "/>*/
/*                                 {% endif %}*/
/*                             </div>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </li>*/
/*                 <li class="list-group-item">*/
/*                     <div class="description">Complete the following sentences with a word from the box.</div>*/
/*                     <div class="choose-box">accomplish, on, pointer, get, mentor, clicked, get out of, appreciative, get(2), in no time flat, hash out, out of the blue</div>*/
/*                     <div class="text">*/
/*                         <div class="text-center title"><strong>Having a Business Mentor</strong></div>*/
/*                         <div class="list-question"><i>Alex</i> : Where are you going?</div>*/
/*                         <div class="list-question"><i>Kenya</i> :  I’m going to meet my business mentor.</div>*/
/*                         <div class="list-question"><i>Alex</i> : Your business mentor? What do you do with a business <input type="text" name="answer[3][]" value="{% if answer[3][0] is defined  %}{{ answer[3][0] }}{% endif %}"/> ?</div>*/
/*                         <div class="list-question"><i>Kenya</i> : Well, my mentor is like an advisor. We meet regularly and I <input type="text" name="answer[3][]" value="{% if answer[3][1] is defined  %}{{ answer[3][1] }}{% endif %}"/> her feedback and guidance with my ideas <input type="text" name="answer[3][]" value="{% if answer[3][2] is defined  %}{{ answer[3][2] }}{% endif %}"/> starting a business.</div>*/
/*                         <div class="list-question"><i>Alex</i> : Oh, so you’re her protégé?</div>*/
/*                         <div class="list-question"><i>Kenya</i> : No, I’m not. I simply go to her with my ideas and she helps me <input type="text" name="answer[3][]" value="{% if answer[3][3] is defined  %}{{ answer[3][3] }}{% endif %}"/> them <input type="text" name="answer[3][]" value="{% if answer[3][4] is defined  %}{{ answer[3][4] }}{% endif %}"/> . She’s a successful entrepreneur and I’m there to learn from her experience.</div>*/
/*                         <div class="list-question"><i>Alex</i> : How did you <input type="text" name="answer[3][]" value="{% if answer[3][5] is defined  %}{{ answer[3][5] }}{% endif %}"/> her to be your mentor? Were you already friends?</div>*/
/*                         <div class="list-question"><i>Kenya</i> : No, I contacted her <input type="text" name="answer[3][]" value="{% if answer[3][6] is defined  %}{{ answer[3][6] }}{% endif %}"/> , actually. I’ve read about her company and her many successes, and I wrote her a letter telling her about me and what I hope to <input type="text" name="answer[3][]" value="{% if answer[3][7] is defined  %}{{ answer[3][7] }}{% endif %}"/> . She agreed to meet with me, and at that first meeting, we really <input type="text" name="answer[3][]" value="{% if answer[3][8] is defined  %}{{ answer[3][8] }}{% endif %}"/> and now we meet once a month.</div>*/
/*                         <div class="list-question"><i>Alex</i> : That’s very generous of her. What does she <input type="text" name="answer[3][]" value="{% if answer[3][9] is defined  %}{{ answer[3][9] }}{% endif %}"/> from it?</div>*/
/*                         <div class="list-question"><i>Kenya</i> :  I’m not sure, but I think she enjoys giving me <input type="text" name="answer[3][]" value="{% if answer[3][10] is defined  %}{{ answer[3][10] }}{% endif %}"/> and sharing her expertise. I’m very <input type="text" name="answer[3][]" value="{% if answer[3][11] is defined  %}{{ answer[3][11] }}{% endif %}"/> and she says I remind her a lot of herself when she was my age. I take that as a huge compliment.</div>*/
/*                         <div class="list-question"><i>Alex</i> : You should. If you’re like her, you’ll be a multi-millionaire <input type="text" name="answer[3][]" value="{% if answer[3][12] is defined  %}{{ answer[3][12] }}{% endif %}"/> .</div>*/
/*                     </div>*/
/*                 </li>*/
/*             </ul>*/
/*         </div>*/
/* */
/* */
