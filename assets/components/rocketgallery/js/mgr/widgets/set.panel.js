RocketGallery.panel.Set = function(config) {
    config = config || {};
    Ext.apply(config,{
        border: false
        ,baseCls: 'modx-formpanel'
        ,cls: 'container'
        ,items: [{
            html: '<h2>'+_('rocketgallery')+'</h2>'
            ,border: false
            ,cls: 'modx-page-header'
        },{
            xtype: 'modx-panel'
            ,defaults: { border: false, autoHeight: true }
            ,border: true
            ,activeItem: 0
            ,hideMode: 'offsets'
            ,items: [{
                // title: _('rocketgallery.items')
                items: [
                    // {
                    //     html: '<p>'+_('rocketgallery.item_intro_msg')+'</p>'
                    //     ,border:false
                    //     ,bodyCssClass: 'panel-desc'
                    // }
                    {
                        xtype: 'rocketgallery-grid-items'
                        ,setid: config.setid
                        ,preventRender: true
                        ,cls: 'main-wrapper'
                    }
                ]
            }]
        }]
    });
    RocketGallery.panel.Set.superclass.constructor.call(this,config);
};
Ext.extend(RocketGallery.panel.Set,MODx.Panel);
Ext.reg('rocketgallery-panel-set',RocketGallery.panel.Set);
