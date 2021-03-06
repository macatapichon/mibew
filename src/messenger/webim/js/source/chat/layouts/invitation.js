/**
 * @preserve Copyright 2005-2013 the original author or authors.
 *
 * Licensed under the Apache License, Version 2.0 (the "License").
 * You may obtain a copy of the License at
 *     http://www.apache.org/licenses/LICENSE-2.0
 */

(function(Mibew, Backbone){

    /**
     * Represents invitation layout
     */
    Mibew.Layouts.Invitation = Backbone.Marionette.Layout.extend(
        /** @lends Mibew.Layouts.Invitation.prototype */
        {
            /**
             * Template function
             * @type Function
             */
            template: Handlebars.templates.invitation_layout,

            /**
             * Regions list
             * @type Object
             */
            regions: {
                messagesRegion: {
                    selector: '#invitation-messages-region',
                    regionType: Mibew.Regions.Messages
                }
            }
        }
    );

})(Mibew, Backbone);