$(function () {
    "use strict";

    // Function to set the selected sidebar type in local storage
    function setSidebar(sidebar) {
        localStorage.setItem('sidebar', sidebar);
        console.log(`Sidebar set to ${sidebar}`);
    }

    // Event listener for sidebar type selector radio buttons
    $('input[name="sidebar-type"]').on('change', function() {
        var selectedSidebar = $(this).attr('id'); // Get the ID of the selected radio button
        setSidebar(selectedSidebar); // Save selected sidebar type in local storage
    });

    // Function to set the selected theme in local storage
    function setTheme(theme) {
        localStorage.setItem('theme', theme);
        console.log(`Theme set to ${theme}`);
    }

    // Event listener for theme selector radio buttons
    $('input[name="theme-layout"]').on('change', function() {
        var selectedTheme = $(this).attr('id').split('-')[0]; // Extract theme from radio button ID
        setTheme(selectedTheme); // Save selected theme in local storage
    });

    // Function to set the selected color theme in local storage
    function setColorTheme(colorTheme) {
        localStorage.setItem('colorTheme', colorTheme);
        console.log(`Color theme set to ${colorTheme}`);
    }

    // Event listener for color theme selector radio buttons
    $('input[name="color-theme-layout"]').on('change', function() {
        var selectedColorTheme = $(this).attr('id'); // Get the ID of the selected radio button
        setColorTheme(selectedColorTheme); // Save selected color theme in local storage
    });

    // Get the sidebar type from local storage, default to "full-sidebar" if not found
    var sidebar = localStorage.getItem('sidebar') || 'full-sidebar';
    console.log(`Sidebar set to after load ${sidebar}`);

    // Get the theme from local storage, default to "dark" if not found
    var theme = localStorage.getItem('theme') || 'dark';
    console.log(`Theme set to after load ${theme}`);

    // Get the color theme from local storage, default to "Orange_Theme" if not found
    var colorTheme = localStorage.getItem('colorTheme') || 'Orange_Theme';
    switch (colorTheme) {
        case 'green-theme-layout':
            colorTheme = 'Green_Theme';
            break;
        case 'cyan-theme-layout':
            colorTheme = 'Cyan_Theme';
            break;
        case 'orange-theme-layout':
            colorTheme = 'Orange_Theme';
            break;
        default:
            // If the retrieved color theme ID doesn't match any expected values, default to a known theme
            
            break;
    }
    
    
    console.log(`Color theme set to after load ${colorTheme}`);

    // Initialize the page settings with the retrieved sidebar type, theme, and color theme
    $("#main-wrapper").AdminSettings({
        Layout: "vertical", // vertical | horizontal
        SidebarType: sidebar, // Use the sidebar type from local storage
        BoxedLayout: false, // true | false
        Direction: "ltr", // ltr | rtl
        Theme: theme, // Use the theme from local storage
        ColorTheme: colorTheme, // Use the color theme from local storage
        cardBorder: false // true | false
    });
});
