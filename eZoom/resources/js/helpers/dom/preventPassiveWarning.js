function preventPassiveWarning(eventType) {
  const originalAddEventListener =
    EventTarget.prototype.addEventListener;

  EventTarget.prototype.addEventListener = function (type, listener, options) {

    if (type === eventType) {

      if (typeof options === 'object') {
        options.passive = false;
      } else {
        options = { passive: false };
      }

    }

    return originalAddEventListener.call(this, type, listener, options);
  };
}

export { preventPassiveWarning };