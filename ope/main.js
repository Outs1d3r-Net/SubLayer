// Modules to control application life and create native browser window
const { app, BrowserWindow, Menu } = require("electron");

// Keep a global reference of the window object, if you don't, the window will
// be closed automatically when the JavaScript object is garbage collected.
let mainWindow;

function createWindow() {
  // Create the browser window.
  mainWindow = new BrowserWindow({
    width: 850,
    height: 650,
    show: false,
    icon: '../img/icong.png',
    webPreferences: {
      preload: `${__dirname}/renderer.js`
    }
  });

  var splash = new BrowserWindow({ width: 350, transparent: true, height: 200, frame: false, icon: '../img/icong.png' });
  splash.setMenuBarVisibility(false)

  mainWindow.once('ready-to-show', () => {
    setTimeout(function () {
      splash.close();
      mainWindow.show();
    }, 3000);
  })
  splash.loadURL("http://localhost/teste/load.html");
  // and load the index.html of the app.
  mainWindow.loadURL("http://localhost/teste/index.php");
  mainWindow.setMenuBarVisibility(false)

  // Open the DevTools.
  // mainWindow.webContents.openDevTools()

  // Emitted when the window is closed.
  mainWindow.on("closed", function () {
    // Dereference the window object, usually you would store windows
    // in an array if your app supports multi windows, this is the time
    // when you should delete the corresponding element.
    mainWindow = null;
  });
}

function createMainMenu() {
  const template = [
    {
      label: "Lists",
      submenu: [
        {
          label: "Create new list",
          accelerator: "CommandOrControl+N",
          click() {
            mainWindow.webContents.send("create-list");
          }
        }
      ]
    }
  ];

  const menu = Menu.buildFromTemplate(template);
  Menu.setApplicationMenu(menu);
}

// This method will be called when Electron has finished
// initialization and is ready to create browser windows.
// Some APIs can only be used after this event occurs.
app.on("ready", () => {
  createWindow();
  createMainMenu();
});

// Quit when all windows are closed.
app.on("window-all-closed", function () {
  // On macOS it is common for applications and their menu bar
  // to stay active until the user quits explicitly with Cmd + Q
  if (process.platform !== "darwin") {
    app.quit();
  }
});

app.on("activate", function () {
  // On macOS it's common to re-create a window in the app when the
  // dock icon is clicked and there are no other windows open.
  if (mainWindow === null) {
    createWindow();
  }
});

// In this file you can include the rest of your app's specific main process
// code. You can also put them in separate files and require them here.