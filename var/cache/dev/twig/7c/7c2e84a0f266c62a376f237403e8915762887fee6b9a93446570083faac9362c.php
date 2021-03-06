<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_e70ecb275c6dac822552aac53f6b7f192ef4b5cfc66d6bc4d8550be766036e28 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_23ad27fbbf5a0ae3a46a17c32032ad98ba583475768b76d203a8e1badeae76f0 = $this->env->getExtension("native_profiler");
        $__internal_23ad27fbbf5a0ae3a46a17c32032ad98ba583475768b76d203a8e1badeae76f0->enter($__internal_23ad27fbbf5a0ae3a46a17c32032ad98ba583475768b76d203a8e1badeae76f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <title>Login</title>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link type=\"text/css\" href=\"http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,800italic,400,700,800\">
    <link type=\"text/css\" rel=\"stylesheet\" href=\"http://fonts.googleapis.com/css?family=Oswald:400,700,300\">
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("styles/font-awesome.min.css"), "html", null, true);
        echo "\">
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("styles/bootstrap.min.css"), "html", null, true);
        echo "\">
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("styles/animate.css"), "html", null, true);
        echo "\">
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("styles/all.css"), "html", null, true);
        echo "\">
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("styles/main.css"), "html", null, true);
        echo "\">
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("styles/style-responsive.css"), "html", null, true);
        echo "\">
</head>
<body style=\"background: url(";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/bg/bg.png"), "html", null, true);
        echo ") center center fixed;\">
    <div class=\"page-form\">
        <div class=\"panel panel-blue\">
            <div class=\"panel-body pan\">
                      ";
        // line 21
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 22
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                <a href=\"";
            // line 23
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                    ";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                </a>
            ";
        } else {
            // line 27
            echo "                <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
            ";
        }
        // line 29
        echo "        </div>

        ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "all", array()));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 32
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 33
                echo "                <div class=\"";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo " text-warning\">
                    ";
                // line 34
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["message"], array(), "FOSUserBundle"), "html", null, true);
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "
        <div>
            ";
        // line 40
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 42
        echo "        </div>
            </div>
        </div>
    </div>
</body>
</html>
";
        
        $__internal_23ad27fbbf5a0ae3a46a17c32032ad98ba583475768b76d203a8e1badeae76f0->leave($__internal_23ad27fbbf5a0ae3a46a17c32032ad98ba583475768b76d203a8e1badeae76f0_prof);

    }

    // line 40
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ff7e081619e77185b1502fa5c5b0efca3259e0b0924355b1ca5b0da39efb5882 = $this->env->getExtension("native_profiler");
        $__internal_ff7e081619e77185b1502fa5c5b0efca3259e0b0924355b1ca5b0da39efb5882->enter($__internal_ff7e081619e77185b1502fa5c5b0efca3259e0b0924355b1ca5b0da39efb5882_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 41
        echo "            ";
        
        $__internal_ff7e081619e77185b1502fa5c5b0efca3259e0b0924355b1ca5b0da39efb5882->leave($__internal_ff7e081619e77185b1502fa5c5b0efca3259e0b0924355b1ca5b0da39efb5882_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 41,  143 => 40,  130 => 42,  128 => 40,  124 => 38,  118 => 37,  109 => 34,  104 => 33,  99 => 32,  95 => 31,  91 => 29,  83 => 27,  77 => 24,  73 => 23,  68 => 22,  66 => 21,  59 => 17,  54 => 15,  50 => 14,  46 => 13,  42 => 12,  38 => 11,  34 => 10,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/*     <title>Login</title>*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*     <link type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,800italic,400,700,800">*/
/*     <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,700,300">*/
/*     <link type="text/css" rel="stylesheet" href="{{asset('styles/font-awesome.min.css')}}">*/
/*     <link type="text/css" rel="stylesheet" href="{{asset('styles/bootstrap.min.css')}}">*/
/*     <link type="text/css" rel="stylesheet" href="{{asset('styles/animate.css')}}">*/
/*     <link type="text/css" rel="stylesheet" href="{{asset('styles/all.css')}}">*/
/*     <link type="text/css" rel="stylesheet" href="{{asset('styles/main.css')}}">*/
/*     <link type="text/css" rel="stylesheet" href="{{asset('styles/style-responsive.css')}}">*/
/* </head>*/
/* <body style="background: url({{asset('images/bg/bg.png')}}) center center fixed;">*/
/*     <div class="page-form">*/
/*         <div class="panel panel-blue">*/
/*             <div class="panel-body pan">*/
/*                       {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*                 {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |*/
/*                 <a href="{{ path('fos_user_security_logout') }}">*/
/*                     {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}*/
/*                 </a>*/
/*             {% else %}*/
/*                 <a href="{{ path('fos_user_security_login') }}">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>*/
/*             {% endif %}*/
/*         </div>*/
/* */
/*         {% for type, messages in app.session.flashBag.all %}*/
/*             {% for message in messages %}*/
/*                 <div class="{{ type }} text-warning">*/
/*                     {{ message|trans({}, 'FOSUserBundle') }}*/
/*                 </div>*/
/*             {% endfor %}*/
/*         {% endfor %}*/
/* */
/*         <div>*/
/*             {% block fos_user_content %}*/
/*             {% endblock fos_user_content %}*/
/*         </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </body>*/
/* </html>*/
/* */
