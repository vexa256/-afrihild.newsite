<div data-kt-menu-trigger="click" class="menu-item menu-accordion ">
    <span class="menu-link">
        <span class="menu-icon">
            <i class="fas fa-users text-light fs-3" aria-hidden="true"></i>
        </span>
        <span class="menu-title">About Section</span>
        <span class="menu-arrow"></span>
    </span>
    <div class="menu-sub menu-sub-accordion menu-active-bg">

        <?php

        MenuItem($link = route('CmsHome'), $label = 'About AfriChild');
        MenuItem($link = route('CMS_ourWork'), $label = 'Our Work');
        MenuItem($link = route('CMS_boardOfDirectors'), $label = 'Board of Directors');
        MenuItem($link = route('CMS_theSecretariat'), $label = 'The Secretariat');
        MenuItem($link = route('CMS_corePrograms'), $label = 'Core Programs');
        MenuItem($link = route('CMS_foundingPartners'), $label = 'Founding Partners');
        MenuItem($link = route('CMS_researchAssociates'), $label = 'Research Associates');
        MenuItem($link = route('CMS_promotingPartners'), $label = 'Promoting Partners');
        MenuItem($link = route('CMS_affiliates'), $label = 'Affiliates');

        ?>





    </div>
</div>
<div data-kt-menu-trigger="click" class="menu-item menu-accordion ">
    <span class="menu-link">
        <span class="menu-icon">
            <i class="fas fa-camera text-light fs-3" aria-hidden="true"></i>
        </span>
        <span class="menu-title">Gallery</span>
        <span class="menu-arrow"></span>
    </span>
    <div class="menu-sub menu-sub-accordion menu-active-bg">

        <?php

        MenuItem($link = route('CMS_gallery'), $label = 'Gallery');

        ?>





    </div>
</div>
<div data-kt-menu-trigger="click" class="menu-item menu-accordion ">
    <span class="menu-link">
        <span class="menu-icon">
            <i class="fas fa-file text-light fs-3" aria-hidden="true"></i>
        </span>
        <span class="menu-title">Resources</span>
        <span class="menu-arrow"></span>
    </span>
    <div class="menu-sub menu-sub-accordion menu-active-bg">

        <?php

        MenuItem($link = route('CMS_research'), $label = 'Research');
        MenuItem($link = route('CMS_reports'), $label = 'Reports');
        MenuItem($link = route('CMS_policyBriefs'), $label = 'Policy Briefs');

        ?>





    </div>
</div>
<div data-kt-menu-trigger="click" class="menu-item menu-accordion ">
    <span class="menu-link">
        <span class="menu-icon">
            <i class="fas fa-user-cog text-light fs-3" aria-hidden="true"></i>
        </span>
        <span class="menu-title">Use Settings</span>
        <span class="menu-arrow"></span>
    </span>
    <div class="menu-sub menu-sub-accordion menu-active-bg">

        <?php

        MenuItem($link = route('UAC'), $label = 'Manage Users');

        ?>





    </div>
</div>
