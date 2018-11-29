var ZaEventManager = function() {
};

ZaEventManager.prototype._events = {};

ZaEventManager.prototype._setEvent = function(name, callback) {
	var events = this._events[name] || [];
	events.push(callback);
	this._events[name] = events;
};

ZaEventManager.prototype._getEvent = function(name) {
	return this._events[name];
};

ZaEventManager.prototype._toArray = function(values) {
	values = values || [];
	if(!Array.isArray(values)) {
		values = values.split(/[ ,]+/);
	}
	return values;
};

ZaEventManager.prototype._each = function(values, callback) {
	values = this._toArray(values);
	for(var index = 0; index < values.length; index++) {
		var value = values[index];
		callback(value, index);
	}
};

ZaEventManager.prototype.on = function(eventNames, callback) {
	var self = this;
	self._each(eventNames, function(eventName) {
		//console.log("bound: " + eventName);
		self._setEvent(eventName, callback);
	});
	return self;
};

ZaEventManager.prototype.trigger = function(eventNames, data) {
	var self = this;
	data = data || {};
	self._each(eventNames, function(eventName) {
		var callbacks = self._getEvent(eventName);
		self._each(callbacks, function(callback) {
			//console.log("triggering: " + eventName);
			data.eventName = eventName;
			callback(data);
		});
	});
	return self;
};

var zaEventManager = new ZaEventManager();

(function() {
	var bindEvent = function($element, element, eventName) {
		var eventType = eventName.split("-").pop();
		if(eventType === "loaded") {
			zaEventManager.trigger(eventName, {
				$element: $element,
				element: element
			});
		} else {
			$element.on(eventType, function(event) {
				zaEventManager.trigger(eventName, {
					event: event,
					$element: $element,
					element: element
				});
			});
		}
	};
	var bindEvents = function() {
		jQuery("#za-main-container [data-za-event]").not("[data-za-event-bound]").each(function() {
			var element = this;
			var $element = jQuery(element);
			var eventNames = $element.attr("data-za-event");
			$element.attr("data-za-event-bound", true);
			zaEventManager._each(eventNames, function(eventName) {
				bindEvent($element, element, eventName);
			});
		});
	};
	window.setInterval(function() {
		bindEvents();
	}, 1000);
})();