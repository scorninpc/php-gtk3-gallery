<?php

// Create a css provider
$css_provider = new GtkCssProvider();
$ret = $css_provider->load_from_data("
	stackswitcher button {
		border-radius: 0;
		background: #ffffff;
		border: none;
		border-bottom: 1px #dfdfdf solid;
		padding: 10px 0;
	}

	stackswitcher button:checked  {
		background: #DADBFF;
	}

	stackswitcher button:focus  {
		border: none;
		outline: none;
	}

	scrollbar,
	scrollbar * {
		min-width: 8px;
		min-height: 8px;
		padding: 0;
		margin: 0;
		border: 0;
		border-radius: 0;
	}

	scrollbar slider {
		background: #B3B5E0;
	}
");
if(!$ret) {
	die("Css Error\n");
}

$style = new GtkStyleContext();
$style->add_provider_for_screen($css_provider, 600);

// 
$win = new GtkWindow();

$switcher = new GtkStackSwitcher();

$scroll = new GtkScrolledWindow();
$scroll->add($switcher);
$scroll->set_policy(GtkPolicyType::AUTOMATIC, GtkPolicyType::AUTOMATIC);

$stack = new GtkStack();
$switcher->set_stack($stack);
$switcher->set_can_focus(FALSE);
$switcher->set_can_default(FALSE);
$switcher->set_orientation(GtkOrientation::VERTICAL);

$paned = new GtkPaned(GtkOrientation::HORIZONTAL);
$paned->add1($scroll);
$paned->add2($stack);

$win->add($paned);

// ----
$hbox = new GtkBox(GtkOrientation::VERTICAL, 5);
$stack->add_titled($hbox, "teste", "Basic form");

$vbox = new GtkBox(GtkOrientation::HORIZONTAL, 5);
$hbox->pack_start($vbox, TRUE, TRUE, 0);

$hbox = new GtkBox(GtkOrientation::VERTICAL, 5);
	$vbox->pack_start($hbox, TRUE, TRUE, 0);
	$hbox->pack_start($a=new GtkLabel("GtkEntry"), FALSE, TRUE, 0); $a->set_xalign(0);
	$hbox->pack_start(new GtkEntry(), FALSE, TRUE, 0);

	$hbox->pack_start($a=new GtkLabel("GtkTextView"), FALSE, TRUE, 0); $a->set_xalign(0);
	$hbox->pack_start($s=new GtkScrolledWindow(), FALSE, TRUE, 0); $s->add($t=new GtkTextView()); $s->set_size_request(NULL, 80);

	$hbox->pack_start(new GtkFixed(), TRUE, TRUE, 0);

$hbox = new GtkBox(GtkOrientation::VERTICAL, 5);
	$vbox->pack_start($hbox, TRUE, TRUE, 0);
	$hbox->pack_start($a=new GtkLabel("GtkEntry"), FALSE, TRUE, 0); $a->set_xalign(0);
	$hbox->pack_start(new GtkEntry(), FALSE, TRUE, 0);

	$hbox->pack_start($a=new GtkLabel("GtkTextView"), FALSE, TRUE, 0); $a->set_xalign(0);
	$hbox->pack_start($s=new GtkScrolledWindow(), FALSE, TRUE, 0); $s->add($t=new GtkTextView()); $s->set_size_request(NULL, 80);

	$hbox->pack_start(new GtkFixed(), TRUE, TRUE, 0);



// ----

$stack->add_titled(new GtkLabel("teste1"), "teste1", "teste1");
$stack->add_titled(new GtkLabel("teste2"), "teste2", "teste2");
$stack->add_titled(new GtkLabel("teste3"), "teste3", "teste2");
$stack->add_titled(new GtkLabel("teste4"), "teste4", "teste2");
$stack->add_titled(new GtkLabel("teste5"), "teste5", "teste2");
$stack->add_titled(new GtkLabel("teste6"), "teste6", "teste2");
$stack->add_titled(new GtkLabel("teste7"), "teste7", "teste2");
$stack->add_titled(new GtkLabel("teste8"), "teste8", "teste2");
$stack->add_titled(new GtkLabel("teste9"), "teste9", "teste2");
$stack->add_titled(new GtkLabel("teste10"), "teste10", "teste2");
$stack->add_titled(new GtkLabel("teste11"), "teste11", "teste2");
$stack->add_titled(new GtkLabel("teste12"), "teste12", "teste2");
$stack->add_titled(new GtkLabel("teste13"), "teste13", "teste2");
$stack->add_titled(new GtkLabel("teste14"), "teste14", "teste2");
$stack->add_titled(new GtkLabel("teste15"), "teste15", "teste2");
$stack->add_titled(new GtkLabel("teste16"), "teste16", "teste2");
$stack->add_titled(new GtkLabel("teste17"), "teste17", "teste2");
$stack->add_titled(new GtkLabel("teste18"), "teste18", "teste2");
$stack->add_titled(new GtkLabel("teste19"), "teste19", "teste2");
$stack->add_titled(new GtkLabel("teste20"), "teste20", "teste2");
$stack->add_titled(new GtkLabel("teste21"), "teste21", "teste2");
$stack->add_titled(new GtkLabel("teste22"), "teste22", "teste2");
$stack->add_titled(new GtkLabel("teste23"), "teste23", "teste2");
$stack->add_titled(new GtkLabel("teste24"), "teste24", "teste2");
$stack->add_titled(new GtkLabel("teste25"), "teste25", "teste2");
$stack->add_titled(new GtkLabel("teste26"), "teste26", "teste2");
$stack->add_titled(new GtkLabel("teste27"), "teste27", "teste2");
$stack->add_titled(new GtkLabel("teste28"), "teste28", "teste2");
$stack->add_titled(new GtkLabel("teste29"), "teste29", "teste2");

// Add the css to context
$style_context = $win->get_style_context();
$style_context->add_provider($css_provider, 600);

$win->connect("destroy", ["Gtk", "main_quit"]);
$win->set_size_request(800, 500);
$win->show_all();
$paned->set_position(240);
Gtk::main();