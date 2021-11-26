RocketGallery.page.Set = function(config) {
    config = config || {};
    Ext.applyIf(config,{
        buttons: [{
            text: _('rocketgallery.back_to_sets')
            ,id: 'rocketgallery-btn-back'
            ,handler: function() {
                MODx.loadPage('?a=index&namespace='+RocketGallery.request.namespace);
            }
            ,scope: this
        }]
        ,components: [{
            xtype: 'rocketgallery-panel-set'
            ,renderTo: 'rocketgallery-panel-set-div'
            ,setid: config.setid
        }]
    });
    RocketGallery.page.Set.superclass.constructor.call(this,config);
};
Ext.extend(RocketGallery.page.Set,MODx.Component);
Ext.reg('rocketgallery-page-set',RocketGallery.page.Set);
