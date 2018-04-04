<?php


/**
 * 开发框架定义api和控制器的可访问设置
 */

/**
 * Api
 */
    $_config['api']['firstApi'] = ['get'];
    $_config['api']['framework']= '*';
    $_config['api']['mod_test.framework']= '*';
    $_config['api']['RestfulExample'] = '*';

    /**
     * 控制器
     */
    $_config['ctrl']['Config'] = '*';
    $_config['ctrl']['Index'] ="*";
    $_config['ctrl']['Passport'] ="*";
    $_config['ctrl']['Framework'] = '*';
    $_config['ctrl']['mod_test.framework'] = '*';
    $_config['ctrl']['mod_test.framework'] = '*';
    $_config['ctrl']['log'] = ['index', '_list', 'detail', 'test_add' ];
    $_config['ctrl']['unit_test'] = '*';
    $_config['ctrl']['user'] = '*';
    $_config['ctrl']['admin.User'] = '*';
    $_config['ctrl']['admin.Group'] = '*';
    $_config['ctrl']['admin.System'] = '*';
    $_config['ctrl']['admin.Project'] = '*';
    $_config['ctrl']['admin.Upload'] = '*';
    $_config['ctrl']['project.Main'] = '*';
    $_config['ctrl']['project.Version'] = '*';
    $_config['ctrl']['project.Module'] = '*';
    $_config['ctrl']['project.Category'] = '*';
    $_config['ctrl']['project.Setting'] = '*';
    $_config['ctrl']['auto_complete'] = '*';

    $_config['ctrl']['issue.Main'] = '*';
    $_config['ctrl']['issue.Detail'] = '*';
    $_config['ctrl']['User'] = '*';
    $_config['ctrl']['Origin'] = '*';
    $_config['ctrl']['OriginRoute'] = '*';


    $_config['ctrl']['admin.IssueType'] = '*';
    $_config['ctrl']['admin.IssueTypeScheme'] = '*';
    $_config['ctrl']['admin.Workflow'] = '*';
    $_config['ctrl']['admin.WorkflowScheme'] = '*';
    $_config['ctrl']['admin.IssueStatus'] = '*';
    $_config['ctrl']['admin.IssueResolve'] = '*';
    $_config['ctrl']['admin.IssuePriority'] = '*';
    $_config['ctrl']['admin.Field'] = '*';
    $_config['ctrl']['admin.IssueUi'] = '*';

    // 路由处理
    $_config['url'] = array( //url 路径访问
        'router' => 'default', //是否支持路由(default 智能模式 path 原生模式 rewrite 重写模式)
        'suffix' => 'html', //生成地址的结尾符，网址后缀
        'map' => array( //url映射
            'cn' => 'com/prod_abls', //访问cn 相当于访问com/prod_abls
            't' => 'com/prod_mbl' //访问cn 相当于访问com/prod_mbl
        ),
    );
    return $_config ;
