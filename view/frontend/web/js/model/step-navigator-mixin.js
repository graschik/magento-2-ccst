define([
    'underscore',
    'mage/utils/wrapper'
], function (_, wrapper) {
    'use strict';

    return function (stepNavigator) {
        stepNavigator.registerStep = wrapper.wrapSuper(
            stepNavigator.registerStep,
            function (code, alias, title, isVisible, navigate, sortOrder) {
                var stepsConfig = window.checkoutConfig.stepsConfig;

                if (stepsConfig && stepsConfig.isCustomTitlesEnabled) {
                    var stepsTitle = Object.values(stepsConfig.stepsTitle);
                    var steps = _.filter(stepsTitle, function (step) {
                        return step.code == code;
                    })
                    if (steps && steps.length > 0) {
                        return this._super(code, alias, steps[0].title, isVisible, navigate, sortOrder);
                    }
                }

                this._super(code, alias, title, isVisible, navigate, sortOrder);
            }
        );

        return stepNavigator;
    };
});
