using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Mms
{
    #region Product_insert_table
    public class Product_insert_table
    {
        #region Member Variables
        protected int _ID;
        protected string _PRODUCT_NAME;
        protected int _PRODUCT_ID;
        protected string _PRODUCT_PRICE;
        protected string _PRODUCT_UPDATE_PRICE;
        protected string _IMAGE;
        #endregion
        #region Constructors
        public Product_insert_table() { }
        public Product_insert_table(string PRODUCT_NAME, int PRODUCT_ID, string PRODUCT_PRICE, string PRODUCT_UPDATE_PRICE, string IMAGE)
        {
            this._PRODUCT_NAME=PRODUCT_NAME;
            this._PRODUCT_ID=PRODUCT_ID;
            this._PRODUCT_PRICE=PRODUCT_PRICE;
            this._PRODUCT_UPDATE_PRICE=PRODUCT_UPDATE_PRICE;
            this._IMAGE=IMAGE;
        }
        #endregion
        #region Public Properties
        public virtual int ID
        {
            get {return _ID;}
            set {_ID=value;}
        }
        public virtual string PRODUCT_NAME
        {
            get {return _PRODUCT_NAME;}
            set {_PRODUCT_NAME=value;}
        }
        public virtual int PRODUCT_ID
        {
            get {return _PRODUCT_ID;}
            set {_PRODUCT_ID=value;}
        }
        public virtual string PRODUCT_PRICE
        {
            get {return _PRODUCT_PRICE;}
            set {_PRODUCT_PRICE=value;}
        }
        public virtual string PRODUCT_UPDATE_PRICE
        {
            get {return _PRODUCT_UPDATE_PRICE;}
            set {_PRODUCT_UPDATE_PRICE=value;}
        }
        public virtual string IMAGE
        {
            get {return _IMAGE;}
            set {_IMAGE=value;}
        }
        #endregion
    }
    #endregion
}