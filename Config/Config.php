<?php 
    const BASE_URL = 'http://localhost/chillagorask';
    //Zona Horaria
    date_default_timezone_set('America/Caracas');

    // Datos de conexion a base de Datos

    const DB_HOST = 'localhost';
    const DB_NAME = 'chillagorask';
    const DB_USER = 'root';
    const DB_PASSWORD = '';
    const DB_CHARSET = 'utf8';

    // Deliminadores decimal y millar Ej. 24,189.00

    const SPD = ',';
    const SPM = '.';

    //Simbolo de MONEDA
    const SMONEY = '$';
    const CURRENCY = 'USD';

    //const IDCLIENTE = '';
    //const SECRET = '';
    //const URLPAYPAL = "https://api-m.paypal.com";


    const NOMBRE_EMPRESA = 'ChillMarin';
    //Datos Empresa
    const DIRECCION = 'Villa de Cura';
    const TELEMPRESA = '+(58) 0424-3144714';
    const EMAIL_EMPRESA = 'darioflores170@gmail.com';


    // Datos para Encriptar / Desencriptar
    const KEY = 'darkmax1';
    const METHODENCRIPT = 'AES-128-ECB';

