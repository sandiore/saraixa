<?php

/* HoraLancada/edita.html.twig */
class __TwigTemplate_c6e00a630d05396c982bfdceb2d5f593e42eb05b3077c1e9c4e7b9921b8167b2 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "HoraLancada/edita.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 3
        echo "    <style>
        h1 {
            font-size: 50px !important;
        }
    </style>
";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "    <div class=\"row\">
        <div class=\"col-lg-12\">
            <h1 class=\"page-header\">Hora Lançada</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    Editar
                </div>
                <div class=\"panel-body\">
                    <div class=\"row\">
                        <div class=\"col-lg-6\">
                            ";
        // line 26
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
                            ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
                            <button type=\"submit\" class=\"btn btn-default\">Editar</button>
                            ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
                        </div>
                        <!-- /.col-lg-6 (nested) -->
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
";
    }

    public function getTemplateName()
    {
        return "HoraLancada/edita.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 29,  70 => 27,  66 => 26,  48 => 10,  45 => 9,  36 => 3,  33 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "HoraLancada/edita.html.twig", "/Users/gordo/Desktop/Maestro/tiktok/templates/HoraLancada/edita.html.twig");
    }
}
