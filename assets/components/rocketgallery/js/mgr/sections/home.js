RocketGallery.page.Home = function(config) {
    config = config || {};
    Ext.applyIf(config,{
        components: [{
            xtype: 'rocketgallery-panel-home'
            ,renderTo: 'rocketgallery-panel-home-div'
        }]
    });
    RocketGallery.page.Home.superclass.constructor.call(this,config);

};
Ext.extend(RocketGallery.page.Home,MODx.Component);
Ext.reg('rocketgallery-page-home',RocketGallery.page.Home);
