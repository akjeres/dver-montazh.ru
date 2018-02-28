(function (cjs, an) {

var p; // shortcut to reference prototypes
var lib={};var ss={};var img={};
lib.ssMetadata = [];


// symbols:



(lib.button = function() {
	this.initialize(img.button);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,273,59);


(lib.door = function() {
	this.initialize(img.door);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,366,400);


(lib.door_knob = function() {
	this.initialize(img.door_knob);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,235,76);


(lib.door_knob_shadow = function() {
	this.initialize(img.door_knob_shadow);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,137,138);


(lib.door_knob_shining = function() {
	this.initialize(img.door_knob_shining);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,240,201);


(lib.door_text = function() {
	this.initialize(img.door_text);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,277,77);


(lib.gift_text = function() {
	this.initialize(img.gift_text);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,273,43);


(lib.if_buy_three_text = function() {
	this.initialize(img.if_buy_three_text);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,272,21);


(lib.one_text = function() {
	this.initialize(img.one_text);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,54,162);


(lib.plus_text = function() {
	this.initialize(img.plus_text);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,69,71);


(lib.three_text = function() {
	this.initialize(img.three_text);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,104,165);


(lib.Анимация10 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Слой_1
	this.instance = new lib.door_knob_shining();
	this.instance.parent = this;
	this.instance.setTransform(-120,-100.5);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-120,-100.5,240,201);


(lib.Анимация9 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Слой_1
	this.instance = new lib.door_text();
	this.instance.parent = this;
	this.instance.setTransform(-138.5,-38.5);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-138.5,-38.5,277,77);


(lib.Анимация8 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Слой_1
	this.instance = new lib.gift_text();
	this.instance.parent = this;
	this.instance.setTransform(-136.5,-21.5);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-136.5,-21.5,273,43);


(lib.Анимация7 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Слой_1
	this.instance = new lib.if_buy_three_text();
	this.instance.parent = this;
	this.instance.setTransform(-136,-10.5);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-136,-10.5,272,21);


(lib.Анимация6 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Слой_1
	this.instance = new lib.button();
	this.instance.parent = this;
	this.instance.setTransform(-135.9,-29.5);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-135.9,-29.5,273,59);


(lib.Анимация5 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Слой_1
	this.instance = new lib.three_text();
	this.instance.parent = this;
	this.instance.setTransform(-52.5,-81.9);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-52.5,-81.9,104,165);


(lib.Анимация4 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Слой_1
	this.instance = new lib.plus_text();
	this.instance.parent = this;
	this.instance.setTransform(-34.5,-35.5);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-34.5,-35.5,69,71);


(lib.Анимация3 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Слой_1
	this.instance = new lib.one_text();
	this.instance.parent = this;
	this.instance.setTransform(-26.4,-80.9);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-26.4,-80.9,54,162);


(lib.Анимация2 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Слой_1
	this.instance = new lib.door_knob_shadow();
	this.instance.parent = this;
	this.instance.setTransform(-68.5,-69);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-68.5,-69,137,138);


(lib.Анимация1 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Слой_1
	this.instance = new lib.door_knob();
	this.instance.parent = this;
	this.instance.setTransform(-117.5,-38);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-117.5,-38,235,76);


(lib.banner = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// timeline functions:
	this.frame_224 = function() {
		this.stop();
	}

	// actions tween:
	this.timeline.addTween(cjs.Tween.get(this).wait(224).call(this.frame_224).wait(1));

	// кнопка
	this.instance = new lib.Анимация6("synched",0);
	this.instance.parent = this;
	this.instance.setTransform(359,120,0.073,0.073);
	this.instance._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(150).to({_off:false},0).wait(1).to({regX:0.6,scaleX:0.2,scaleY:0.2,x:359.1},0).wait(1).to({scaleX:0.32,scaleY:0.32,x:359.2},0).wait(1).to({scaleX:0.44,scaleY:0.44,x:359.3},0).wait(1).to({scaleX:0.56,scaleY:0.56,x:359.4},0).wait(1).to({scaleX:0.66,scaleY:0.66},0).wait(1).to({scaleX:0.76,scaleY:0.76,x:359.5},0).wait(1).to({scaleX:0.84,scaleY:0.84},0).wait(1).to({scaleX:0.91,scaleY:0.91,x:359.6},0).wait(1).to({scaleX:0.96,scaleY:0.96},0).wait(1).to({scaleX:1,scaleY:1},0).wait(1).to({scaleX:1.03,scaleY:1.03},0).wait(1).to({scaleX:1.04,scaleY:1.04},0).wait(1).to({scaleX:1.04,scaleY:1.04},0).wait(1).to({scaleX:1.03,scaleY:1.03},0).wait(1).to({scaleX:1.01,scaleY:1.01},0).wait(1).to({scaleX:0.98,scaleY:0.98},0).wait(1).to({scaleX:0.96,scaleY:0.96},0).wait(1).to({scaleX:0.95,scaleY:0.95},0).wait(1).to({scaleX:0.95,scaleY:0.95},0).wait(1).to({scaleX:0.95,scaleY:0.95},0).wait(1).to({scaleX:0.96,scaleY:0.96},0).wait(1).to({scaleX:0.97,scaleY:0.97},0).wait(1).to({scaleX:0.98,scaleY:0.98},0).wait(1).to({regX:0,scaleX:1,scaleY:1,x:359},0).wait(51));

	// при покупке трех
	this.instance_1 = new lib.Анимация7("synched",0);
	this.instance_1.parent = this;
	this.instance_1.setTransform(360,34,0.059,0.059);
	this.instance_1._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_1).wait(122).to({_off:false},0).wait(1).to({scaleX:0.18,scaleY:0.18,y:37.9},0).wait(1).to({scaleX:0.3,scaleY:0.3,y:41.7},0).wait(1).to({scaleX:0.42,scaleY:0.42,y:45.5},0).wait(1).to({scaleX:0.53,scaleY:0.53,y:49.1},0).wait(1).to({scaleX:0.64,scaleY:0.64,y:52.4},0).wait(1).to({scaleX:0.73,scaleY:0.73,y:55.4},0).wait(1).to({scaleX:0.82,scaleY:0.82,y:58.1},0).wait(1).to({scaleX:0.89,scaleY:0.89,y:60.4},0).wait(1).to({scaleX:0.94,scaleY:0.94,y:62.2},0).wait(1).to({scaleX:0.99,scaleY:0.99,y:63.6},0).wait(1).to({scaleX:1.02,scaleY:1.02,y:64.5},0).wait(1).to({scaleX:1.03,scaleY:1.03,y:65.1},0).wait(1).to({scaleX:1.04,scaleY:1.04,y:65.2},0).wait(1).to({scaleX:1.04,scaleY:1.04,y:65.3},0).wait(1).to({scaleX:1.02,scaleY:1.02,y:64.8},0).wait(1).to({scaleX:1,scaleY:1,y:64},0).wait(1).to({scaleX:0.98,scaleY:0.98,y:63.2},0).wait(1).to({scaleX:0.96,scaleY:0.96,y:62.7},0).wait(1).to({scaleX:0.95,scaleY:0.95,y:62.4},0).wait(1).to({scaleX:0.95,scaleY:0.95,y:62.3},0).wait(1).to({scaleX:0.95,scaleY:0.95,y:62.4},0).wait(1).to({scaleX:0.96,scaleY:0.96,y:62.6},0).wait(1).to({scaleX:0.97,scaleY:0.97,y:62.9},0).wait(1).to({scaleX:0.98,scaleY:0.98,y:63.4},0).wait(1).to({scaleX:1,scaleY:1,y:64},0).wait(1).to({startPosition:0},0).wait(1).to({startPosition:0},0).wait(1).to({startPosition:0},0).wait(1).to({startPosition:0},0).wait(1).to({startPosition:0},0).wait(1).to({startPosition:0},0).wait(1).to({y:58.8},0).wait(1).to({y:54.6},0).wait(1).to({y:50.9},0).wait(1).to({y:47.8},0).wait(1).to({y:45.2},0).wait(1).to({y:42.9},0).wait(1).to({y:41},0).wait(1).to({y:39.4},0).wait(1).to({y:38},0).wait(1).to({y:36.9},0).wait(1).to({y:35.9},0).wait(1).to({y:35.2},0).wait(1).to({y:34.7},0).wait(1).to({y:34.3},0).wait(1).to({y:34.1},0).wait(1).to({y:34},0).wait(56));

	// в подарок
	this.instance_2 = new lib.Анимация8("synched",0);
	this.instance_2.parent = this;
	this.instance_2.setTransform(359,11,0.059,0.059);
	this.instance_2._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_2).wait(107).to({_off:false},0).wait(1).to({scaleX:0.18,scaleY:0.18,y:12.3},0).wait(1).to({scaleX:0.3,scaleY:0.3,y:13.6},0).wait(1).to({scaleX:0.42,scaleY:0.42,y:14.8},0).wait(1).to({scaleX:0.53,scaleY:0.53,y:16},0).wait(1).to({scaleX:0.64,scaleY:0.64,y:17.1},0).wait(1).to({scaleX:0.73,scaleY:0.73,y:18.1},0).wait(1).to({scaleX:0.82,scaleY:0.82,y:19},0).wait(1).to({scaleX:0.89,scaleY:0.89,y:19.8},0).wait(1).to({scaleX:0.94,scaleY:0.94,y:20.4},0).wait(1).to({scaleX:0.99,scaleY:0.99,y:20.9},0).wait(1).to({scaleX:1.02,scaleY:1.02,y:21.2},0).wait(1).to({scaleX:1.03,scaleY:1.03,y:21.4},0).wait(1).to({scaleX:1.04,scaleY:1.04},0).wait(1).to({scaleX:1.04,scaleY:1.04},0).wait(1).to({scaleX:1.02,scaleY:1.02,y:21.3},0).wait(1).to({scaleX:1,scaleY:1,y:21},0).wait(1).to({scaleX:0.98,scaleY:0.98,y:20.7},0).wait(1).to({scaleX:0.96,scaleY:0.96,y:20.6},0).wait(1).to({scaleX:0.95,scaleY:0.95,y:20.5},0).wait(1).to({scaleX:0.95,scaleY:0.95,y:20.4},0).wait(1).to({scaleX:0.95,scaleY:0.95,y:20.5},0).wait(1).to({scaleX:0.96,scaleY:0.96},0).wait(1).to({scaleX:0.97,scaleY:0.97,y:20.6},0).wait(1).to({scaleX:0.98,scaleY:0.98,y:20.8},0).wait(1).to({scaleX:1,scaleY:1,y:21},0).wait(1).to({startPosition:0},0).wait(1).to({startPosition:0},0).wait(1).to({startPosition:0},0).wait(1).to({startPosition:0},0).wait(1).to({startPosition:0},0).wait(1).to({startPosition:0},0).wait(1).to({startPosition:0},0).wait(1).to({startPosition:0},0).wait(1).to({startPosition:0},0).wait(1).to({startPosition:0},0).wait(1).to({startPosition:0},0).wait(1).to({startPosition:0},0).wait(1).to({startPosition:0},0).wait(1).to({startPosition:0},0).wait(1).to({startPosition:0},0).wait(1).to({startPosition:0},0).wait(1).to({startPosition:0},0).wait(1).to({startPosition:0},0).wait(1).to({startPosition:0},0).wait(1).to({startPosition:0},0).wait(1).to({startPosition:0},0).wait(1).to({y:15.8},0).wait(1).to({y:11.6},0).wait(1).to({y:7.9},0).wait(1).to({y:4.8},0).wait(1).to({y:2.2},0).wait(1).to({y:-0.1},0).wait(1).to({y:-2},0).wait(1).to({y:-3.6},0).wait(1).to({y:-5},0).wait(1).to({y:-6.1},0).wait(1).to({y:-7.1},0).wait(1).to({y:-7.8},0).wait(1).to({y:-8.3},0).wait(1).to({y:-8.7},0).wait(1).to({y:-8.9},0).wait(1).to({y:-9},0).wait(56));

	// Дверь
	this.instance_3 = new lib.Анимация9("synched",0);
	this.instance_3.parent = this;
	this.instance_3.setTransform(361,10,0.058,0.058);
	this.instance_3._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_3).wait(92).to({_off:false},0).wait(1).to({scaleX:0.18,scaleY:0.18,y:2.2},0).wait(1).to({scaleX:0.3,scaleY:0.3,y:-5.5},0).wait(1).to({scaleX:0.42,scaleY:0.42,y:-13},0).wait(1).to({scaleX:0.53,scaleY:0.53,y:-20.2},0).wait(1).to({scaleX:0.64,scaleY:0.64,y:-26.9},0).wait(1).to({scaleX:0.73,scaleY:0.73,y:-32.9},0).wait(1).to({scaleX:0.82,scaleY:0.82,y:-38.2},0).wait(1).to({scaleX:0.89,scaleY:0.89,y:-42.7},0).wait(1).to({scaleX:0.94,scaleY:0.94,y:-46.4},0).wait(1).to({scaleX:0.99,scaleY:0.99,y:-49.2},0).wait(1).to({scaleX:1.02,scaleY:1.02,y:-51.1},0).wait(1).to({scaleX:1.03,scaleY:1.03,y:-52.2},0).wait(1).to({scaleX:1.04,scaleY:1.04,y:-52.4},0).wait(1).to({scaleX:1.04,scaleY:1.04,y:-52.5},0).wait(1).to({scaleX:1.02,scaleY:1.02,y:-51.5},0).wait(1).to({scaleX:1,scaleY:1,y:-50},0).wait(1).to({scaleX:0.98,scaleY:0.98,y:-48.5},0).wait(1).to({scaleX:0.96,scaleY:0.96,y:-47.4},0).wait(1).to({scaleX:0.95,scaleY:0.95,y:-46.8},0).wait(1).to({scaleX:0.95,scaleY:0.95,y:-46.6},0).wait(1).to({scaleX:0.95,scaleY:0.95,y:-46.7},0).wait(1).to({scaleX:0.96,scaleY:0.96,y:-47.2},0).wait(1).to({scaleX:0.97,scaleY:0.97,y:-47.9},0).wait(1).to({scaleX:0.98,scaleY:0.98,y:-48.8},0).wait(1).to({scaleX:1,scaleY:1,y:-50},0).wait(1).to({startPosition:0},0).wait(1).to({startPosition:0},0).wait(1).to({startPosition:0},0).wait(1).to({startPosition:0},0).wait(1).to({startPosition:0},0).wait(1).to({startPosition:0},0).wait(1).to({startPosition:0},0).wait(1).to({startPosition:0},0).wait(1).to({startPosition:0},0).wait(1).to({startPosition:0},0).wait(1).to({startPosition:0},0).wait(1).to({startPosition:0},0).wait(1).to({startPosition:0},0).wait(1).to({startPosition:0},0).wait(1).to({startPosition:0},0).wait(1).to({startPosition:0},0).wait(1).to({startPosition:0},0).wait(1).to({startPosition:0},0).wait(1).to({startPosition:0},0).wait(1).to({startPosition:0},0).wait(1).to({startPosition:0},0).wait(1).to({startPosition:0},0).wait(1).to({startPosition:0},0).wait(1).to({startPosition:0},0).wait(1).to({startPosition:0},0).wait(1).to({startPosition:0},0).wait(1).to({startPosition:0},0).wait(1).to({startPosition:0},0).wait(1).to({startPosition:0},0).wait(1).to({startPosition:0},0).wait(1).to({startPosition:0},0).wait(1).to({startPosition:0},0).wait(1).to({startPosition:0},0).wait(1).to({startPosition:0},0).wait(1).to({startPosition:0},0).wait(1).to({startPosition:0},0).wait(1).to({y:-55.2},0).wait(1).to({y:-59.4},0).wait(1).to({y:-63.1},0).wait(1).to({y:-66.2},0).wait(1).to({y:-68.8},0).wait(1).to({y:-71.1},0).wait(1).to({y:-73},0).wait(1).to({y:-74.6},0).wait(1).to({y:-76},0).wait(1).to({y:-77.1},0).wait(1).to({y:-78.1},0).wait(1).to({y:-78.8},0).wait(1).to({y:-79.3},0).wait(1).to({y:-79.7},0).wait(1).to({y:-79.9},0).wait(1).to({y:-80},0).wait(56));

	// 1
	this.instance_4 = new lib.Анимация3("synched",0);
	this.instance_4.parent = this;
	this.instance_4.setTransform(54,-7,0.074,0.074);
	this.instance_4._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_4).wait(66).to({_off:false},0).wait(1).to({regX:0.6,scaleX:0.23,scaleY:0.23,x:65.8},0).wait(1).to({scaleX:0.38,scaleY:0.38,x:77.3},0).wait(1).to({scaleX:0.52,scaleY:0.52,x:88.3},0).wait(1).to({scaleX:0.66,scaleY:0.66,x:98.3},0).wait(1).to({scaleX:0.77,scaleY:0.77,x:107.1},0).wait(1).to({scaleX:0.87,scaleY:0.87,x:114.3},0).wait(1).to({scaleX:0.94,scaleY:0.94,x:120},0).wait(1).to({scaleX:0.99,scaleY:0.99,x:123.9},0).wait(1).to({scaleX:1.02,scaleY:1.02,x:126.3},0).wait(1).to({scaleX:1.03,scaleY:1.03,x:127},0).wait(1).to({scaleX:1.01,scaleY:1.01,x:125.6},0).wait(1).to({scaleX:0.97,scaleY:0.97,x:122.6},0).wait(1).to({scaleX:0.94,scaleY:0.94,x:120.1},0).wait(1).to({scaleX:0.92,scaleY:0.92,x:118.7},0).wait(1).to({scaleX:0.92,scaleY:0.92,x:118.2},0).wait(1).to({scaleX:0.92,scaleY:0.92,x:118.4},0).wait(1).to({scaleX:0.93,scaleY:0.93,x:119.3},0).wait(1).to({scaleX:0.95,scaleY:0.95,x:120.6},0).wait(1).to({scaleX:0.97,scaleY:0.97,x:122.5},0).wait(1).to({regX:0,scaleX:1,scaleY:1,x:124},0).wait(139));

	// +
	this.instance_5 = new lib.Анимация4("synched",0);
	this.instance_5.parent = this;
	this.instance_5.setTransform(-21,-8,0.028,0.028);
	this.instance_5._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_5).wait(56).to({_off:false},0).wait(1).to({scaleX:0.19,scaleY:0.19,x:-12.7},0).wait(1).to({scaleX:0.35,scaleY:0.35,x:-4.5},0).wait(1).to({scaleX:0.5,scaleY:0.5,x:3.3},0).wait(1).to({scaleX:0.64,scaleY:0.64,x:10.4},0).wait(1).to({scaleX:0.76,scaleY:0.76,x:16.6},0).wait(1).to({scaleX:0.86,scaleY:0.86,x:21.7},0).wait(1).to({scaleX:0.94,scaleY:0.94,x:25.7},0).wait(1).to({scaleX:0.99,scaleY:0.99,x:28.5},0).wait(1).to({scaleX:1.02,scaleY:1.02,x:30.2},0).wait(1).to({scaleX:1.03,scaleY:1.03,x:30.7},0).wait(1).to({scaleX:1.01,scaleY:1.01,x:29.7},0).wait(1).to({scaleX:0.97,scaleY:0.97,x:27.6},0).wait(1).to({scaleX:0.94,scaleY:0.94,x:25.8},0).wait(1).to({scaleX:0.92,scaleY:0.92,x:24.8},0).wait(1).to({scaleX:0.91,scaleY:0.91,x:24.4},0).wait(1).to({scaleX:0.92,scaleY:0.92,x:24.6},0).wait(1).to({scaleX:0.93,scaleY:0.93,x:25.2},0).wait(1).to({scaleX:0.95,scaleY:0.95,x:26.2},0).wait(1).to({scaleX:0.97,scaleY:0.97,x:27.5},0).wait(1).to({scaleX:1,scaleY:1,x:29},0).wait(149));

	// 3
	this.instance_6 = new lib.Анимация5("synched",0);
	this.instance_6.parent = this;
	this.instance_6.setTransform(-92,-6,0.085,0.085);
	this.instance_6._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_6).wait(46).to({_off:false},0).wait(1).to({regX:-0.5,regY:0.5,scaleX:0.24,scaleY:0.24,x:-92.1,y:-5.9},0).wait(1).to({scaleX:0.39,scaleY:0.39,x:-92.2,y:-5.8},0).wait(1).to({scaleX:0.53,scaleY:0.53,y:-5.7},0).wait(1).to({scaleX:0.66,scaleY:0.66,x:-92.3,y:-5.6},0).wait(1).to({scaleX:0.77,scaleY:0.77,x:-92.4},0).wait(1).to({scaleX:0.87,scaleY:0.87,y:-5.5},0).wait(1).to({scaleX:0.94,scaleY:0.94},0).wait(1).to({scaleX:0.99,scaleY:0.99,x:-92.5},0).wait(1).to({scaleX:1.02,scaleY:1.02},0).wait(1).to({scaleX:1.03,scaleY:1.03},0).wait(1).to({scaleX:1.01,scaleY:1.01},0).wait(1).to({scaleX:0.97,scaleY:0.97},0).wait(1).to({scaleX:0.94,scaleY:0.94,x:-92.4},0).wait(1).to({scaleX:0.92,scaleY:0.92},0).wait(1).to({scaleX:0.92,scaleY:0.92},0).wait(1).to({scaleX:0.92,scaleY:0.92},0).wait(1).to({scaleX:0.93,scaleY:0.93},0).wait(1).to({scaleX:0.95,scaleY:0.95},0).wait(1).to({scaleX:0.97,scaleY:0.97,x:-92.5},0).wait(1).to({regX:0,regY:0,scaleX:1,scaleY:1,x:-92,y:-6},0).wait(159));

	// блик
	this.instance_7 = new lib.Анимация10("synched",0);
	this.instance_7.parent = this;
	this.instance_7.setTransform(-363,-54,0.133,0.133);
	this.instance_7.alpha = 0;
	this.instance_7._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_7).wait(184).to({_off:false},0).to({scaleX:1,scaleY:1,rotation:10,alpha:1},15).to({regX:0.1,regY:0.4,scaleX:0.13,scaleY:0.13,rotation:96.8,alpha:0},25).wait(1));

	// ручка
	this.instance_8 = new lib.Анимация1("synched",0);
	this.instance_8.parent = this;
	this.instance_8.setTransform(-360,-36,1,1,0,0,0,83,4);

	this.timeline.addTween(cjs.Tween.get(this.instance_8).to({startPosition:0},4).to({rotation:-25,x:-359.9,y:-35.9},15,cjs.Ease.get(1)).wait(1).to({regX:0,regY:0,x:-436.9,y:-4.5},0).wait(1).to({regX:83,regY:4,x:-359.9,y:-35.9},0).wait(1).to({regX:0,regY:0,rotation:-23.1,x:-437.9,y:-7.1},0).wait(1).to({rotation:-21.3,x:-438.8,y:-9.5},0).wait(1).to({rotation:-19.7,x:-439.5,y:-11.8},0).wait(1).to({rotation:-18.1,x:-440.1,y:-14},0).wait(1).to({rotation:-16.6,x:-440.7,y:-16.1},0).wait(1).to({rotation:-15.2,x:-441.1,y:-18.1},0).wait(1).to({rotation:-13.9,x:-441.5,y:-19.9},0).wait(1).to({rotation:-12.7,x:-441.8,y:-21.6},0).wait(1).to({rotation:-11.6,x:-442.1,y:-23.3},0).wait(1).to({rotation:-10.5,x:-442.3,y:-24.8},0).wait(1).to({rotation:-9.5,x:-442.5,y:-26.2},0).wait(1).to({rotation:-8.6,x:-442.7,y:-27.6},0).wait(1).to({rotation:-7.7,x:-442.8,y:-28.8},0).wait(1).to({rotation:-6.9,x:-442.9,y:-30},0).wait(1).to({rotation:-6.2,y:-31},0).wait(1).to({rotation:-5.5,x:-443,y:-32},0).wait(1).to({rotation:-4.9,y:-33},0).wait(1).to({rotation:-4.3,x:-443.1,y:-33.8},0).wait(1).to({rotation:-3.7,y:-34.6},0).wait(1).to({rotation:-3.2,y:-35.3},0).wait(1).to({rotation:-2.8,y:-36},0).wait(1).to({rotation:-2.4,y:-36.6},0).wait(1).to({rotation:-2,y:-37.1},0).wait(1).to({rotation:-1.7,y:-37.6},0).wait(1).to({rotation:-1.4,y:-38},0).wait(1).to({rotation:-1.1,y:-38.4},0).wait(1).to({rotation:-0.9,y:-38.7},0).wait(1).to({rotation:-0.7,x:-443,y:-39},0).wait(1).to({rotation:-0.5,y:-39.3},0).wait(1).to({rotation:-0.4,y:-39.5},0).wait(1).to({rotation:-0.2,y:-39.6},0).wait(1).to({y:-39.8},0).wait(1).to({rotation:-0.1,y:-39.9},0).wait(1).to({rotation:0},0).wait(1).to({y:-40},0).wait(1).to({regX:83,regY:4,x:-360,y:-36},0).wait(168));

	// тень
	this.instance_9 = new lib.Анимация2("synched",0);
	this.instance_9.parent = this;
	this.instance_9.setTransform(-360,-36,1,1,0,0,0,55,-56);

	this.timeline.addTween(cjs.Tween.get(this.instance_9).to({startPosition:0},4).to({regY:-56.1,scaleX:0.92,scaleY:0.92,rotation:-4.5,x:-359.9,y:-36.1},15,cjs.Ease.get(1)).wait(1).to({regX:0,regY:0,x:-406.3,y:19.1},0).wait(1).to({regX:55,regY:-56.1,x:-359.9,y:-36.1},0).wait(1).to({regX:0,regY:0,scaleX:0.93,scaleY:0.93,rotation:-4,x:-407.3,y:19.3},0).wait(1).to({scaleX:0.93,scaleY:0.93,rotation:-3.6,x:-407.9,y:19.4},0).wait(1).to({scaleX:0.94,scaleY:0.94,rotation:-3.3,x:-408.4,y:19.5},0).wait(1).to({scaleX:0.94,scaleY:0.94,rotation:-3.1,x:-408.9},0).wait(1).to({scaleX:0.95,scaleY:0.95,rotation:-2.9,x:-409.4,y:19.6},0).wait(1).to({scaleX:0.95,scaleY:0.95,rotation:-2.6,x:-409.8},0).wait(1).to({scaleX:0.96,scaleY:0.96,rotation:-2.4,x:-410.2,y:19.7},0).wait(1).to({scaleX:0.96,scaleY:0.96,rotation:-2.2,x:-410.6},0).wait(1).to({scaleX:0.96,scaleY:0.96,rotation:-2.1,x:-410.9,y:19.8},0).wait(1).to({scaleX:0.97,scaleY:0.97,rotation:-1.9,x:-411.2},0).wait(1).to({scaleX:0.97,scaleY:0.97,rotation:-1.7,x:-411.5},0).wait(1).to({scaleX:0.97,scaleY:0.97,rotation:-1.6,x:-411.8},0).wait(1).to({scaleX:0.97,scaleY:0.97,rotation:-1.4,x:-412.1,y:19.9},0).wait(1).to({scaleX:0.98,scaleY:0.98,rotation:-1.3,x:-412.4},0).wait(1).to({scaleX:0.98,scaleY:0.98,rotation:-1.2,x:-412.6},0).wait(1).to({scaleX:0.98,scaleY:0.98,rotation:-1.1,x:-412.8},0).wait(1).to({scaleX:0.98,scaleY:0.98,rotation:-1,x:-413.1},0).wait(1).to({scaleX:0.98,scaleY:0.98,rotation:-0.9,x:-413.3,y:20},0).wait(1).to({scaleX:0.99,scaleY:0.99,rotation:-0.8,x:-413.5},0).wait(1).to({scaleX:0.99,scaleY:0.99,rotation:-0.7,x:-413.6},0).wait(1).to({scaleX:0.99,scaleY:0.99,rotation:-0.6,x:-413.8},0).wait(1).to({scaleX:0.99,scaleY:0.99,rotation:-0.5,x:-414},0).wait(1).to({scaleX:0.99,scaleY:0.99,rotation:-0.4,x:-414.1},0).wait(1).to({scaleX:0.99,scaleY:0.99,x:-414.2},0).wait(1).to({scaleX:0.99,scaleY:0.99,rotation:-0.3,x:-414.3},0).wait(1).to({scaleX:1,scaleY:1,x:-414.5},0).wait(1).to({scaleX:1,scaleY:1,rotation:-0.2},0).wait(1).to({scaleX:1,scaleY:1,x:-414.6},0).wait(1).to({scaleX:1,scaleY:1,rotation:-0.1,x:-414.7},0).wait(1).to({x:-414.8},0).wait(1).to({scaleX:1,scaleY:1},0).wait(1).to({rotation:0,x:-414.9},0).wait(1).to({scaleX:1,scaleY:1},0).wait(1).to({startPosition:0},0).wait(1).to({startPosition:0},0).wait(1).to({regX:55,regY:-56,x:-360,y:-36},0).wait(168));

	// дверь
	this.instance_10 = new lib.door();
	this.instance_10.parent = this;
	this.instance_10.setTransform(-569,-200);

	this.timeline.addTween(cjs.Tween.get(this.instance_10).wait(225));

	// bg
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#F2FAFD").s().p("EhZDAfQMAAAg+fMCyHAAAMAAAA+fg");

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(225));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-570,-200,1140,400);


// stage content:
(lib.banner_1140x400 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// banner
	this.instance = new lib.banner();
	this.instance.parent = this;
	this.instance.setTransform(570,200);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(570,200,1140,400);
// library properties:
lib.properties = {
	id: 'D5386F38533FA44AAF249F0C7D5BF87C',
	width: 1140,
	height: 400,
	fps: 60,
	color: "#F2FAFD",
	opacity: 1.00,
	manifest: [
		{src:"images/button.png", id:"button"},
		{src:"images/door.png", id:"door"},
		{src:"images/door_knob.png", id:"door_knob"},
		{src:"images/door_knob_shadow.png", id:"door_knob_shadow"},
		{src:"images/door_knob_shining.png", id:"door_knob_shining"},
		{src:"images/door_text.png", id:"door_text"},
		{src:"images/gift_text.png", id:"gift_text"},
		{src:"images/if_buy_three_text.png", id:"if_buy_three_text"},
		{src:"images/one_text.png", id:"one_text"},
		{src:"images/plus_text.png", id:"plus_text"},
		{src:"images/three_text.png", id:"three_text"}
	],
	preloads: []
};



// bootstrap callback support:

(lib.Stage = function(canvas) {
	createjs.Stage.call(this, canvas);
}).prototype = p = new createjs.Stage();

p.setAutoPlay = function(autoPlay) {
	this.tickEnabled = autoPlay;
}
p.play = function() { this.tickEnabled = true; this.getChildAt(0).gotoAndPlay(this.getTimelinePosition()) }
p.stop = function(ms) { if(ms) this.seek(ms); this.tickEnabled = false; }
p.seek = function(ms) { this.tickEnabled = true; this.getChildAt(0).gotoAndStop(lib.properties.fps * ms / 1000); }
p.getDuration = function() { return this.getChildAt(0).totalFrames / lib.properties.fps * 1000; }

p.getTimelinePosition = function() { return this.getChildAt(0).currentFrame / lib.properties.fps * 1000; }

an.bootcompsLoaded = an.bootcompsLoaded || [];
if(!an.bootstrapListeners) {
	an.bootstrapListeners=[];
}

an.bootstrapCallback=function(fnCallback) {
	an.bootstrapListeners.push(fnCallback);
	if(an.bootcompsLoaded.length > 0) {
		for(var i=0; i<an.bootcompsLoaded.length; ++i) {
			fnCallback(an.bootcompsLoaded[i]);
		}
	}
};

an.compositions = an.compositions || {};
an.compositions['D5386F38533FA44AAF249F0C7D5BF87C'] = {
	getStage: function() { return exportRoot.getStage(); },
	getLibrary: function() { return lib; },
	getSpriteSheet: function() { return ss; },
	getImages: function() { return img; }
};

an.compositionLoaded = function(id) {
	an.bootcompsLoaded.push(id);
	for(var j=0; j<an.bootstrapListeners.length; j++) {
		an.bootstrapListeners[j](id);
	}
}

an.getComposition = function(id) {
	return an.compositions[id];
}



})(createjs = createjs||{}, AdobeAn = AdobeAn||{});
var createjs, AdobeAn;