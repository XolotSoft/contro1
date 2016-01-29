<?php
//  ********************************************************
//              Muhimbi Document Converter Service
//
//                 Copyright 2013, Muhimbi Ltd
//                       www.muhimbi.com
//
//                     All rights reserved
//
//       Filename: documentConverterServices.php
//          To do: -
//   Known issues: -
//        History: 7 Feb 2013 - BM - Initial version
//
//  ********************************************************

/**
 * 
 */
class DocumentConverterService extends SoapClient
{

  /**
   * 
   * @var array $classmap The defined classes
   * @access private
   */
  private static $classmap = array(
    'Watermark' => 'Watermark',
    'Container' => 'Container',
    'Element' => 'Element',
    'Defaults' => 'Defaults',
    'Text' => 'Text',
    'Pdf' => 'Pdf',
    'Rtf' => 'Rtf',
    'Image' => 'Image',
    'Rectangle' => 'Rectangle',
    'Ellipse' => 'Ellipse',
    'Line' => 'Line',
    'ConverterSpecificSettings' => 'ConverterSpecificSettings',
    'ConverterSpecificSettings_MSG' => 'ConverterSpecificSettings_MSG',
    'ConverterSpecificSettings_CommandLineConverter' => 'ConverterSpecificSettings_CommandLineConverter',
    'ConverterSpecificSettings_Cad' => 'ConverterSpecificSettings_Cad',
    'CadConversionElement' => 'CadConversionElement',
    'ConverterSpecificSettings_HTML' => 'ConverterSpecificSettings_HTML',
    'ConverterSpecificSettings_InfoPath' => 'ConverterSpecificSettings_InfoPath',
    'InfoPathView' => 'InfoPathView',
    'ConverterSpecificSettings_WordProcessing' => 'ConverterSpecificSettings_WordProcessing',
    'ConverterSpecificSettings_Presentations' => 'ConverterSpecificSettings_Presentations',
    'OutputFormatSpecificSettings' => 'OutputFormatSpecificSettings',
    'OutputFormatSpecificSettings_PDF' => 'OutputFormatSpecificSettings_PDF',
    'PDFViewerPreferences' => 'PDFViewerPreferences',
    'OpenOptions' => 'OpenOptions',
    'ConversionSettings' => 'ConversionSettings',
    'WebServiceFaultException' => 'WebServiceFaultException',
    'ProcessingOptions' => 'ProcessingOptions',
    'SourceFile' => 'SourceFile',
    'FileMergeSettings' => 'FileMergeSettings',
    'MergeSettings' => 'MergeSettings',
    'FileSplitOptions' => 'FileSplitOptions',
    'BatchResults' => 'BatchResults',
    'BatchResult' => 'BatchResult',
    'Configuration' => 'Configuration',
    'ConverterConfiguration' => 'ConverterConfiguration',
    'DiagnosticRequestItem' => 'DiagnosticRequestItem',
    'Diagnostics' => 'Diagnostics',
    'DiagnosticResultItem' => 'DiagnosticResultItem',
    'Convert' => 'Convert',
    'ConvertResponse' => 'ConvertResponse',
    'ApplyWatermark' => 'ApplyWatermark',
    'ApplyWatermarkResponse' => 'ApplyWatermarkResponse',
    'ApplySecurity' => 'ApplySecurity',
    'ApplySecurityResponse' => 'ApplySecurityResponse',
    'ProcessChanges' => 'ProcessChanges',
    'ProcessChangesResponse' => 'ProcessChangesResponse',
    'ProcessBatch' => 'ProcessBatch',
    'ProcessBatchResponse' => 'ProcessBatchResponse',
    'GetConfiguration' => 'GetConfiguration',
    'GetConfigurationResponse' => 'GetConfigurationResponse',
    'GetDiagnostics' => 'GetDiagnostics',
    'GetDiagnosticsResponse' => 'GetDiagnosticsResponse');

  /**
   * 
   * @param array $config A array of config values
   * @param string $wsdl The wsdl file to use
   * @access public
   */
  public function __construct(array $options = array(), $wsdl = 'http://localhost:41734/Muhimbi.DocumentConverter.WebService/?wsdl')
  {
    foreach(self::$classmap as $key => $value)
  {
    if(!isset($options['classmap'][$key]))
    {
      $options['classmap'][$key] = $value;
    }
  }
  
  parent::__construct($wsdl, $options);
  }

  /**
   * 
   * @param Convert $parameters
   * @access public
   */
  public function Convert(Convert $parameters)
  {
    return $this->__soapCall('Convert', array($parameters));
  }

  /**
   * 
   * @param ApplyWatermark $parameters
   * @access public
   */
  public function ApplyWatermark(ApplyWatermark $parameters)
  {
    return $this->__soapCall('ApplyWatermark', array($parameters));
  }

  /**
   * 
   * @param ApplySecurity $parameters
   * @access public
   */
  public function ApplySecurity(ApplySecurity $parameters)
  {
    return $this->__soapCall('ApplySecurity', array($parameters));
  }

  /**
   * 
   * @param ProcessChanges $parameters
   * @access public
   */
  public function ProcessChanges(ProcessChanges $parameters)
  {
    return $this->__soapCall('ProcessChanges', array($parameters));
  }

  /**
   * 
   * @param ProcessBatch $parameters
   * @access public
   */
  public function ProcessBatch(ProcessBatch $parameters)
  {
    return $this->__soapCall('ProcessBatch', array($parameters));
  }

  /**
   * 
   * @param GetConfiguration $parameters
   * @access public
   */
  public function GetConfiguration(GetConfiguration $parameters)
  {
    return $this->__soapCall('GetConfiguration', array($parameters));
  }

  /**
   * 
   * @param GetDiagnostics $parameters
   * @access public
   */
  public function GetDiagnostics(GetDiagnostics $parameters)
  {
    return $this->__soapCall('GetDiagnostics', array($parameters));
  }

}
class Watermark
{

  /**
   * 
   * @var PageOrientation $PageOrientation
   * @access public
   */
  public $PageOrientation;

  /**
   * 
   * @var int $StartPage
   * @access public
   */
  public $StartPage;

  /**
   * 
   * @var int $EndPage
   * @access public
   */
  public $EndPage;

  /**
   * 
   * @var int $PageInterval
   * @access public
   */
  public $PageInterval;

  /**
   * 
   * @var string $PageRange
   * @access public
   */
  public $PageRange;

  /**
   * 
   * @param PageOrientation $PageOrientation
   * @param int $StartPage
   * @param int $EndPage
   * @param int $PageInterval
   * @param string $PageRange
   * @access public
   */
  public function __construct($PageOrientation, $StartPage, $EndPage, $PageInterval, $PageRange)
  {
    $this->PageOrientation = $PageOrientation;
    $this->StartPage = $StartPage;
    $this->EndPage = $EndPage;
    $this->PageInterval = $PageInterval;
    $this->PageRange = $PageRange;
  }

}
class Container
{

  /**
   * 
   * @var array $Elements
   * @access public
   */
  public $Elements;

  /**
   * 
   * @var Defaults $Defaults
   * @access public
   */
  public $Defaults;

  /**
   * 
   * @param array $Elements
   * @param Defaults $Defaults
   * @access public
   */
  public function __construct($Elements, $Defaults)
  {
    $this->Elements = $Elements;
    $this->Defaults = $Defaults;
  }

}
class Element
{

  /**
   * 
   * @var HPosition $HPosition
   * @access public
   */
  public $HPosition;

  /**
   * 
   * @var VPosition $VPosition
   * @access public
   */
  public $VPosition;

  /**
   * 
   * @var string $X
   * @access public
   */
  public $X;

  /**
   * 
   * @var string $Y
   * @access public
   */
  public $Y;

  /**
   * 
   * @var string $Width
   * @access public
   */
  public $Width;

  /**
   * 
   * @var string $Height
   * @access public
   */
  public $Height;

  /**
   * 
   * @var int $ZOrder
   * @access public
   */
  public $ZOrder;

  /**
   * 
   * @var ScaleMode $ScaleMode
   * @access public
   */
  public $ScaleMode;

  /**
   * 
   * @var string $ScaleX
   * @access public
   */
  public $ScaleX;

  /**
   * 
   * @var string $ScaleY
   * @access public
   */
  public $ScaleY;

  /**
   * 
   * @var string $Rotation
   * @access public
   */
  public $Rotation;

  /**
   * 
   * @var string $Transparency
   * @access public
   */
  public $Transparency;

  /**
   * 
   * @var string $LineColor
   * @access public
   */
  public $LineColor;

  /**
   * 
   * @var string $LineWidth
   * @access public
   */
  public $LineWidth;

  /**
   * 
   * @var string $FillColor
   * @access public
   */
  public $FillColor;

  /**
   * 
   * @param HPosition $HPosition
   * @param VPosition $VPosition
   * @param string $X
   * @param string $Y
   * @param string $Width
   * @param string $Height
   * @param int $ZOrder
   * @param ScaleMode $ScaleMode
   * @param string $ScaleX
   * @param string $ScaleY
   * @param string $Rotation
   * @param string $Transparency
   * @param string $LineColor
   * @param string $LineWidth
   * @param string $FillColor
   * @access public
   */
  public function __construct($HPosition, $VPosition, $X, $Y, $Width, $Height, $ZOrder, $ScaleMode, $ScaleX, $ScaleY, $Rotation, $Transparency, $LineColor, $LineWidth, $FillColor)
  {
    $this->HPosition = $HPosition;
    $this->VPosition = $VPosition;
    $this->X = $X;
    $this->Y = $Y;
    $this->Width = $Width;
    $this->Height = $Height;
    $this->ZOrder = $ZOrder;
    $this->ScaleMode = $ScaleMode;
    $this->ScaleX = $ScaleX;
    $this->ScaleY = $ScaleY;
    $this->Rotation = $Rotation;
    $this->Transparency = $Transparency;
    $this->LineColor = $LineColor;
    $this->LineWidth = $LineWidth;
    $this->FillColor = $FillColor;
  }

}
class Defaults
{

  /**
   * 
   * @var HPosition $HPosition
   * @access public
   */
  public $HPosition;

  /**
   * 
   * @var VPosition $VPosition
   * @access public
   */
  public $VPosition;

  /**
   * 
   * @var string $X
   * @access public
   */
  public $X;

  /**
   * 
   * @var string $Y
   * @access public
   */
  public $Y;

  /**
   * 
   * @var string $Rotation
   * @access public
   */
  public $Rotation;

  /**
   * 
   * @var string $Transparency
   * @access public
   */
  public $Transparency;

  /**
   * 
   * @var string $LineColor
   * @access public
   */
  public $LineColor;

  /**
   * 
   * @var string $LineWidth
   * @access public
   */
  public $LineWidth;

  /**
   * 
   * @var string $FillColor
   * @access public
   */
  public $FillColor;

  /**
   * 
   * @var string $FontFamilyName
   * @access public
   */
  public $FontFamilyName;

  /**
   * 
   * @var string $FontSize
   * @access public
   */
  public $FontSize;

  /**
   * 
   * @var FontStyle $FontStyle
   * @access public
   */
  public $FontStyle;

  /**
   * 
   * @var HAlign $HAlign
   * @access public
   */
  public $HAlign;

  /**
   * 
   * @var VAlign $VAlign
   * @access public
   */
  public $VAlign;

  /**
   * 
   * @var WordWrap $WordWrap
   * @access public
   */
  public $WordWrap;

  /**
   * 
   * @var ScaleMode $ScaleMode
   * @access public
   */
  public $ScaleMode;

  /**
   * 
   * @var string $ScaleX
   * @access public
   */
  public $ScaleX;

  /**
   * 
   * @var string $ScaleY
   * @access public
   */
  public $ScaleY;

  /**
   * 
   * @param HPosition $HPosition
   * @param VPosition $VPosition
   * @param string $X
   * @param string $Y
   * @param string $Rotation
   * @param string $Transparency
   * @param string $LineColor
   * @param string $LineWidth
   * @param string $FillColor
   * @param string $FontFamilyName
   * @param string $FontSize
   * @param FontStyle $FontStyle
   * @param HAlign $HAlign
   * @param VAlign $VAlign
   * @param WordWrap $WordWrap
   * @param ScaleMode $ScaleMode
   * @param string $ScaleX
   * @param string $ScaleY
   * @access public
   */
  public function __construct($HPosition, $VPosition, $X, $Y, $Rotation, $Transparency, $LineColor, $LineWidth, $FillColor, $FontFamilyName, $FontSize, $FontStyle, $HAlign, $VAlign, $WordWrap, $ScaleMode, $ScaleX, $ScaleY)
  {
    $this->HPosition = $HPosition;
    $this->VPosition = $VPosition;
    $this->X = $X;
    $this->Y = $Y;
    $this->Rotation = $Rotation;
    $this->Transparency = $Transparency;
    $this->LineColor = $LineColor;
    $this->LineWidth = $LineWidth;
    $this->FillColor = $FillColor;
    $this->FontFamilyName = $FontFamilyName;
    $this->FontSize = $FontSize;
    $this->FontStyle = $FontStyle;
    $this->HAlign = $HAlign;
    $this->VAlign = $VAlign;
    $this->WordWrap = $WordWrap;
    $this->ScaleMode = $ScaleMode;
    $this->ScaleX = $ScaleX;
    $this->ScaleY = $ScaleY;
  }

}
class Text
{

  /**
   * 
   * @var string $Content
   * @access public
   */
  public $Content;

  /**
   * 
   * @var string $FontFamilyName
   * @access public
   */
  public $FontFamilyName;

  /**
   * 
   * @var string $FontSize
   * @access public
   */
  public $FontSize;

  /**
   * 
   * @var FontStyle $FontStyle
   * @access public
   */
  public $FontStyle;

  /**
   * 
   * @var WordWrap $WordWrap
   * @access public
   */
  public $WordWrap;

  /**
   * 
   * @var HAlign $HAlign
   * @access public
   */
  public $HAlign;

  /**
   * 
   * @var VAlign $VAlign
   * @access public
   */
  public $VAlign;

  /**
   * 
   * @param string $Content
   * @param string $FontFamilyName
   * @param string $FontSize
   * @param FontStyle $FontStyle
   * @param WordWrap $WordWrap
   * @param HAlign $HAlign
   * @param VAlign $VAlign
   * @access public
   */
  public function __construct($Content, $FontFamilyName, $FontSize, $FontStyle, $WordWrap, $HAlign, $VAlign)
  {
    $this->Content = $Content;
    $this->FontFamilyName = $FontFamilyName;
    $this->FontSize = $FontSize;
    $this->FontStyle = $FontStyle;
    $this->WordWrap = $WordWrap;
    $this->HAlign = $HAlign;
    $this->VAlign = $VAlign;
  }

}
class Pdf
{

  /**
   * 
   * @var base64Binary $PdfData
   * @access public
   */
  public $PdfData;

  /**
   * 
   * @param base64Binary $PdfData
   * @access public
   */
  public function __construct($PdfData)
  {
    $this->PdfData = $PdfData;
  }

}
class Rtf
{

  /**
   * 
   * @var string $RtfData
   * @access public
   */
  public $RtfData;

  /**
   * 
   * @param string $RtfData
   * @access public
   */
  public function __construct($RtfData)
  {
    $this->RtfData = $RtfData;
  }

}
class Image
{

  /**
   * 
   * @var base64Binary $ImageData
   * @access public
   */
  public $ImageData;

  /**
   * 
   * @param base64Binary $ImageData
   * @access public
   */
  public function __construct($ImageData)
  {
    $this->ImageData = $ImageData;
  }

}
class Rectangle
{

  /**
   * 
   * @access public
   */
  public function __construct()
  {
  
  }

}
class Ellipse
{

  /**
   * 
   * @access public
   */
  public function __construct()
  {
  
  }

}
class Line
{

  /**
   * 
   * @var string $EndX
   * @access public
   */
  public $EndX;

  /**
   * 
   * @var string $EndY
   * @access public
   */
  public $EndY;

  /**
   * 
   * @param string $EndX
   * @param string $EndY
   * @access public
   */
  public function __construct($EndX, $EndY)
  {
    $this->EndX = $EndX;
    $this->EndY = $EndY;
  }

}
class ConverterSpecificSettings
{

  /**
   * 
   * @access public
   */
  public function __construct()
  {
  
  }

}
class ConverterSpecificSettings_MSG
{

  /**
   * 
   * @var boolean $ConvertAttachments
   * @access public
   */
  public $ConvertAttachments;

  /**
   * 
   * @var string $PaperSize
   * @access public
   */
  public $PaperSize;

  /**
   * 
   * @var HTMLScaleMode $HTMLScaleMode
   * @access public
   */
  public $HTMLScaleMode;

  /**
   * 
   * @param boolean $ConvertAttachments
   * @param string $PaperSize
   * @param HTMLScaleMode $HTMLScaleMode
   * @access public
   */
  public function __construct($ConvertAttachments, $PaperSize, $HTMLScaleMode)
  {
    $this->ConvertAttachments = $ConvertAttachments;
    $this->PaperSize = $PaperSize;
    $this->HTMLScaleMode = $HTMLScaleMode;
  }

}
class ConverterSpecificSettings_CommandLineConverter
{

  /**
   * 
   * @var string $Parameter1
   * @access public
   */
  public $Parameter1;

  /**
   * 
   * @var string $Parameter2
   * @access public
   */
  public $Parameter2;

  /**
   * 
   * @var string $Parameter3
   * @access public
   */
  public $Parameter3;

  /**
   * 
   * @var string $Parameter4
   * @access public
   */
  public $Parameter4;

  /**
   * 
   * @var string $Parameter5
   * @access public
   */
  public $Parameter5;

  /**
   * 
   * @var string $Parameter6
   * @access public
   */
  public $Parameter6;

  /**
   * 
   * @var string $Parameter7
   * @access public
   */
  public $Parameter7;

  /**
   * 
   * @var string $Parameter8
   * @access public
   */
  public $Parameter8;

  /**
   * 
   * @var string $Parameter9
   * @access public
   */
  public $Parameter9;

  /**
   * 
   * @var string $Parameter10
   * @access public
   */
  public $Parameter10;

  /**
   * 
   * @param string $Parameter1
   * @param string $Parameter2
   * @param string $Parameter3
   * @param string $Parameter4
   * @param string $Parameter5
   * @param string $Parameter6
   * @param string $Parameter7
   * @param string $Parameter8
   * @param string $Parameter9
   * @param string $Parameter10
   * @access public
   */
  public function __construct($Parameter1, $Parameter2, $Parameter3, $Parameter4, $Parameter5, $Parameter6, $Parameter7, $Parameter8, $Parameter9, $Parameter10)
  {
    $this->Parameter1 = $Parameter1;
    $this->Parameter2 = $Parameter2;
    $this->Parameter3 = $Parameter3;
    $this->Parameter4 = $Parameter4;
    $this->Parameter5 = $Parameter5;
    $this->Parameter6 = $Parameter6;
    $this->Parameter7 = $Parameter7;
    $this->Parameter8 = $Parameter8;
    $this->Parameter9 = $Parameter9;
    $this->Parameter10 = $Parameter10;
  }

}
class ConverterSpecificSettings_Cad
{

  /**
   * 
   * @var string $PaperSize
   * @access public
   */
  public $PaperSize;

  /**
   * 
   * @var string $BackgroundColor
   * @access public
   */
  public $BackgroundColor;

  /**
   * 
   * @var string $ForegroundColor
   * @access public
   */
  public $ForegroundColor;

  /**
   * 
   * @var array $CadConversionElements
   * @access public
   */
  public $CadConversionElements;

  /**
   * 
   * @var string $PageMargins
   * @access public
   */
  public $PageMargins;

  /**
   * 
   * @var CadEmptyLayoutDetectionMode $EmptyLayoutDetectionMode
   * @access public
   */
  public $EmptyLayoutDetectionMode;

  /**
   * 
   * @var CadLayoutSortOrder $LayoutSortOrder
   * @access public
   */
  public $LayoutSortOrder;

  /**
   * 
   * @param string $PaperSize
   * @param string $BackgroundColor
   * @param string $ForegroundColor
   * @param array $CadConversionElements
   * @param string $PageMargins
   * @param CadEmptyLayoutDetectionMode $EmptyLayoutDetectionMode
   * @param CadLayoutSortOrder $LayoutSortOrder
   * @access public
   */
  public function __construct($PaperSize, $BackgroundColor, $ForegroundColor, $CadConversionElements, $PageMargins, $EmptyLayoutDetectionMode, $LayoutSortOrder)
  {
    $this->PaperSize = $PaperSize;
    $this->BackgroundColor = $BackgroundColor;
    $this->ForegroundColor = $ForegroundColor;
    $this->CadConversionElements = $CadConversionElements;
    $this->PageMargins = $PageMargins;
    $this->EmptyLayoutDetectionMode = $EmptyLayoutDetectionMode;
    $this->LayoutSortOrder = $LayoutSortOrder;
  }

}
class CadConversionElement
{

  /**
   * 
   * @var CadConversionElementType $Type
   * @access public
   */
  public $Type;

  /**
   * 
   * @var string $Name
   * @access public
   */
  public $Name;

  /**
   * 
   * @param CadConversionElementType $Type
   * @param string $Name
   * @access public
   */
  public function __construct($Type, $Name)
  {
    $this->Type = $Type;
    $this->Name = $Name;
  }

}
class ConverterSpecificSettings_HTML
{

  /**
   * 
   * @var string $PaperSize
   * @access public
   */
  public $PaperSize;

  /**
   * 
   * @var HTMLScaleMode $ScaleMode
   * @access public
   */
  public $ScaleMode;

  /**
   * 
   * @var string $PageMargins
   * @access public
   */
  public $PageMargins;

  /**
   * 
   * @param string $PaperSize
   * @param HTMLScaleMode $ScaleMode
   * @param string $PageMargins
   * @access public
   */
  public function __construct($PaperSize, $ScaleMode, $PageMargins)
  {
    $this->PaperSize = $PaperSize;
    $this->ScaleMode = $ScaleMode;
    $this->PageMargins = $PageMargins;
  }

}
class ConverterSpecificSettings_InfoPath
{

  /**
   * 
   * @var boolean $StripDotNETCode
   * @access public
   */
  public $StripDotNETCode;

  /**
   * 
   * @var boolean $StripDataObjects
   * @access public
   */
  public $StripDataObjects;

  /**
   * 
   * @var boolean $ConvertAttachments
   * @access public
   */
  public $ConvertAttachments;

  /**
   * 
   * @var array $ConversionViews
   * @access public
   */
  public $ConversionViews;

  /**
   * 
   * @var boolean $AutoTrustForms
   * @access public
   */
  public $AutoTrustForms;

  /**
   * 
   * @var boolean $ProcessFullTrustForms
   * @access public
   */
  public $ProcessFullTrustForms;

  /**
   * 
   * @param boolean $StripDotNETCode
   * @param boolean $StripDataObjects
   * @param boolean $ConvertAttachments
   * @param array $ConversionViews
   * @param boolean $AutoTrustForms
   * @param boolean $ProcessFullTrustForms
   * @access public
   */
  public function __construct($StripDotNETCode, $StripDataObjects, $ConvertAttachments, $ConversionViews, $AutoTrustForms, $ProcessFullTrustForms)
  {
    $this->StripDotNETCode = $StripDotNETCode;
    $this->StripDataObjects = $StripDataObjects;
    $this->ConvertAttachments = $ConvertAttachments;
    $this->ConversionViews = $ConversionViews;
    $this->AutoTrustForms = $AutoTrustForms;
    $this->ProcessFullTrustForms = $ProcessFullTrustForms;
  }

}
class InfoPathView
{

  /**
   * 
   * @var string $Name
   * @access public
   */
  public $Name;

  /**
   * 
   * @param string $Name
   * @access public
   */
  public function __construct($Name)
  {
    $this->Name = $Name;
  }

}
class ConverterSpecificSettings_WordProcessing
{

  /**
   * 
   * @var RevisionsAndCommentsMarkupMode $RevisionsAndCommentsMarkupMode
   * @access public
   */
  public $RevisionsAndCommentsMarkupMode;

  /**
   * 
   * @var RevisionsAndCommentsDisplayMode $RevisionsAndCommentsDisplayMode
   * @access public
   */
  public $RevisionsAndCommentsDisplayMode;

  /**
   * 
   * @var boolean $ProcessDocumentTemplate
   * @access public
   */
  public $ProcessDocumentTemplate;

  /**
   * 
   * @param RevisionsAndCommentsMarkupMode $RevisionsAndCommentsMarkupMode
   * @param RevisionsAndCommentsDisplayMode $RevisionsAndCommentsDisplayMode
   * @param boolean $ProcessDocumentTemplate
   * @access public
   */
  public function __construct($RevisionsAndCommentsMarkupMode, $RevisionsAndCommentsDisplayMode, $ProcessDocumentTemplate)
  {
    $this->RevisionsAndCommentsMarkupMode = $RevisionsAndCommentsMarkupMode;
    $this->RevisionsAndCommentsDisplayMode = $RevisionsAndCommentsDisplayMode;
    $this->ProcessDocumentTemplate = $ProcessDocumentTemplate;
  }

}
class ConverterSpecificSettings_Presentations
{

  /**
   * 
   * @var PresentationsPrintOutputType $PrintOutputType
   * @access public
   */
  public $PrintOutputType;

  /**
   * 
   * @var boolean $FrameSlides
   * @access public
   */
  public $FrameSlides;

  /**
   * 
   * @param PresentationsPrintOutputType $PrintOutputType
   * @param boolean $FrameSlides
   * @access public
   */
  public function __construct($PrintOutputType, $FrameSlides)
  {
    $this->PrintOutputType = $PrintOutputType;
    $this->FrameSlides = $FrameSlides;
  }

}
class OutputFormatSpecificSettings
{

  /**
   * 
   * @access public
   */
  public function __construct()
  {
  
  }

}
class OutputFormatSpecificSettings_PDF
{

  /**
   * 
   * @var boolean $FastWebView
   * @access public
   */
  public $FastWebView;

  /**
   * 
   * @var boolean $EmbedAllFonts
   * @access public
   */
  public $EmbedAllFonts;

  /**
   * 
   * @var boolean $SubsetFonts
   * @access public
   */
  public $SubsetFonts;

  /**
   * 
   * @var PDFViewerPreferences $ViewerPreferences
   * @access public
   */
  public $ViewerPreferences;

  /**
   * 
   * @var boolean $PostProcessFile
   * @access public
   */
  public $PostProcessFile;

  /**
   * 
   * @param boolean $FastWebView
   * @param boolean $EmbedAllFonts
   * @param boolean $SubsetFonts
   * @param PDFViewerPreferences $ViewerPreferences
   * @param boolean $PostProcessFile
   * @access public
   */
  public function __construct($FastWebView, $EmbedAllFonts, $SubsetFonts, $ViewerPreferences, $PostProcessFile)
  {
    $this->FastWebView = $FastWebView;
    $this->EmbedAllFonts = $EmbedAllFonts;
    $this->SubsetFonts = $SubsetFonts;
    $this->ViewerPreferences = $ViewerPreferences;
    $this->PostProcessFile = $PostProcessFile;
  }

}
class PDFViewerPreferences
{

  /**
   * 
   * @var boolean $CenterWindow
   * @access public
   */
  public $CenterWindow;

  /**
   * 
   * @var boolean $DisplayTitle
   * @access public
   */
  public $DisplayTitle;

  /**
   * 
   * @var boolean $FitWindow
   * @access public
   */
  public $FitWindow;

  /**
   * 
   * @var boolean $HideMenubar
   * @access public
   */
  public $HideMenubar;

  /**
   * 
   * @var boolean $HideToolbar
   * @access public
   */
  public $HideToolbar;

  /**
   * 
   * @var boolean $HideWindowUI
   * @access public
   */
  public $HideWindowUI;

  /**
   * 
   * @var PDFPageLayout $PageLayout
   * @access public
   */
  public $PageLayout;

  /**
   * 
   * @var PDFNavigationPane $NavigationPane
   * @access public
   */
  public $NavigationPane;

  /**
   * 
   * @var boolean $HideEmptyNavigationPane
   * @access public
   */
  public $HideEmptyNavigationPane;

  /**
   * 
   * @var PDFPageScalingMode $PageScalingMode
   * @access public
   */
  public $PageScalingMode;

  /**
   * 
   * @var boolean $FullScreen
   * @access public
   */
  public $FullScreen;

  /**
   * 
   * @param boolean $CenterWindow
   * @param boolean $DisplayTitle
   * @param boolean $FitWindow
   * @param boolean $HideMenubar
   * @param boolean $HideToolbar
   * @param boolean $HideWindowUI
   * @param PDFPageLayout $PageLayout
   * @param PDFNavigationPane $NavigationPane
   * @param boolean $HideEmptyNavigationPane
   * @param PDFPageScalingMode $PageScalingMode
   * @param boolean $FullScreen
   * @access public
   */
  public function __construct($CenterWindow, $DisplayTitle, $FitWindow, $HideMenubar, $HideToolbar, $HideWindowUI, $PageLayout, $NavigationPane, $HideEmptyNavigationPane, $PageScalingMode, $FullScreen)
  {
    $this->CenterWindow = $CenterWindow;
    $this->DisplayTitle = $DisplayTitle;
    $this->FitWindow = $FitWindow;
    $this->HideMenubar = $HideMenubar;
    $this->HideToolbar = $HideToolbar;
    $this->HideWindowUI = $HideWindowUI;
    $this->PageLayout = $PageLayout;
    $this->NavigationPane = $NavigationPane;
    $this->HideEmptyNavigationPane = $HideEmptyNavigationPane;
    $this->PageScalingMode = $PageScalingMode;
    $this->FullScreen = $FullScreen;
  }

}
class OpenOptions
{

  /**
   * 
   * @var string $UserName
   * @access public
   */
  public $UserName;

  /**
   * 
   * @var string $Password
   * @access public
   */
  public $Password;

  /**
   * 
   * @var string $FileExtension
   * @access public
   */
  public $FileExtension;

  /**
   * 
   * @var string $OriginalFileName
   * @access public
   */
  public $OriginalFileName;

  /**
   * 
   * @var boolean $RefreshContent
   * @access public
   */
  public $RefreshContent;

  /**
   * 
   * @var boolean $AllowExternalConnections
   * @access public
   */
  public $AllowExternalConnections;

  /**
   * 
   * @var MacroSecurityOption $AllowMacros
   * @access public
   */
  public $AllowMacros;

  /**
   * 
   * @param string $UserName
   * @param string $Password
   * @param string $FileExtension
   * @param string $OriginalFileName
   * @param boolean $RefreshContent
   * @param boolean $AllowExternalConnections
   * @param MacroSecurityOption $AllowMacros
   * @access public
   */
  public function __construct($UserName, $Password, $FileExtension, $OriginalFileName, $RefreshContent, $AllowExternalConnections, $AllowMacros)
  {
    $this->UserName = $UserName;
    $this->Password = $Password;
    $this->FileExtension = $FileExtension;
    $this->OriginalFileName = $OriginalFileName;
    $this->RefreshContent = $RefreshContent;
    $this->AllowExternalConnections = $AllowExternalConnections;
    $this->AllowMacros = $AllowMacros;
  }

}
class ConversionSettings
{

  /**
   * 
   * @var OutputFormat $Format
   * @access public
   */
  public $Format;

  /**
   * 
   * @var int $StartPage
   * @access public
   */
  public $StartPage;

  /**
   * 
   * @var int $EndPage
   * @access public
   */
  public $EndPage;

  /**
   * 
   * @var ConversionRange $Range
   * @access public
   */
  public $Range;

  /**
   * 
   * @var ConversionQuality $Quality
   * @access public
   */
  public $Quality;

  /**
   * 
   * @var PDFProfile $PDFProfile
   * @access public
   */
  public $PDFProfile;

  /**
   * 
   * @var string $OpenPassword
   * @access public
   */
  public $OpenPassword;

  /**
   * 
   * @var string $OwnerPassword
   * @access public
   */
  public $OwnerPassword;

  /**
   * 
   * @var SecurityOptions $SecurityOptions
   * @access public
   */
  public $SecurityOptions;

  /**
   * 
   * @var ConversionFidelities $Fidelity
   * @access public
   */
  public $Fidelity;

  /**
   * 
   * @var BookmarkGenerationOption $GenerateBookmarks
   * @access public
   */
  public $GenerateBookmarks;

  /**
   * 
   * @var array $Watermarks
   * @access public
   */
  public $Watermarks;

  /**
   * 
   * @var PageOrientation $PageOrientation
   * @access public
   */
  public $PageOrientation;

  /**
   * 
   * @var ConverterSpecificSettings $ConverterSpecificSettings
   * @access public
   */
  public $ConverterSpecificSettings;

  /**
   * 
   * @var OutputFormatSpecificSettings $OutputFormatSpecificSettings
   * @access public
   */
  public $OutputFormatSpecificSettings;

  /**
   * 
   * @param OutputFormat $Format
   * @param int $StartPage
   * @param int $EndPage
   * @param ConversionRange $Range
   * @param ConversionQuality $Quality
   * @param PDFProfile $PDFProfile
   * @param string $OpenPassword
   * @param string $OwnerPassword
   * @param SecurityOptions $SecurityOptions
   * @param ConversionFidelities $Fidelity
   * @param BookmarkGenerationOption $GenerateBookmarks
   * @param array $Watermarks
   * @param PageOrientation $PageOrientation
   * @param ConverterSpecificSettings $ConverterSpecificSettings
   * @param OutputFormatSpecificSettings $OutputFormatSpecificSettings
   * @access public
   */
  public function __construct($Format, $StartPage, $EndPage, $Range, $Quality, $PDFProfile, $OpenPassword, $OwnerPassword, $SecurityOptions, $Fidelity, $GenerateBookmarks, $Watermarks, $PageOrientation, $ConverterSpecificSettings, $OutputFormatSpecificSettings)
  {
    $this->Format = $Format;
    $this->StartPage = $StartPage;
    $this->EndPage = $EndPage;
    $this->Range = $Range;
    $this->Quality = $Quality;
    $this->PDFProfile = $PDFProfile;
    $this->OpenPassword = $OpenPassword;
    $this->OwnerPassword = $OwnerPassword;
    $this->SecurityOptions = $SecurityOptions;
    $this->Fidelity = $Fidelity;
    $this->GenerateBookmarks = $GenerateBookmarks;
    $this->Watermarks = $Watermarks;
    $this->PageOrientation = $PageOrientation;
    $this->ConverterSpecificSettings = $ConverterSpecificSettings;
    $this->OutputFormatSpecificSettings = $OutputFormatSpecificSettings;
  }

}
class WebServiceFaultException
{

  /**
   * 
   * @var WebServiceExceptionType $ExceptionType
   * @access public
   */
  public $ExceptionType;

  /**
   * 
   * @var array $ExceptionDetails
   * @access public
   */
  public $ExceptionDetails;

  /**
   * 
   * @param WebServiceExceptionType $ExceptionType
   * @param array $ExceptionDetails
   * @access public
   */
  public function __construct($ExceptionType, $ExceptionDetails)
  {
    $this->ExceptionType = $ExceptionType;
    $this->ExceptionDetails = $ExceptionDetails;
  }

}
class ProcessingOptions
{

  /**
   * 
   * @var array $SourceFiles
   * @access public
   */
  public $SourceFiles;

  /**
   * 
   * @var MergeSettings $MergeSettings
   * @access public
   */
  public $MergeSettings;

  /**
   * 
   * @var FileSplitOptions $SplitOptions
   * @access public
   */
  public $SplitOptions;

  /**
   * 
   * @param array $SourceFiles
   * @param MergeSettings $MergeSettings
   * @param FileSplitOptions $SplitOptions
   * @access public
   */
  public function __construct($SourceFiles, $MergeSettings, $SplitOptions)
  {
    $this->SourceFiles = $SourceFiles;
    $this->MergeSettings = $MergeSettings;
    $this->SplitOptions = $SplitOptions;
  }

}
class SourceFile
{

  /**
   * 
   * @var base64Binary $File
   * @access public
   */
  public $File;

  /**
   * 
   * @var OpenOptions $OpenOptions
   * @access public
   */
  public $OpenOptions;

  /**
   * 
   * @var ConversionSettings $ConversionSettings
   * @access public
   */
  public $ConversionSettings;

  /**
   * 
   * @var FileMergeSettings $MergeSettings
   * @access public
   */
  public $MergeSettings;

  /**
   * 
   * @param base64Binary $File
   * @param OpenOptions $OpenOptions
   * @param ConversionSettings $ConversionSettings
   * @param FileMergeSettings $MergeSettings
   * @access public
   */
  public function __construct($File, $OpenOptions, $ConversionSettings, $MergeSettings)
  {
    $this->File = $File;
    $this->OpenOptions = $OpenOptions;
    $this->ConversionSettings = $ConversionSettings;
    $this->MergeSettings = $MergeSettings;
  }

}
class FileMergeSettings
{

  /**
   * 
   * @var string $TopLevelBookmark
   * @access public
   */
  public $TopLevelBookmark;

  /**
   * 
   * @param string $TopLevelBookmark
   * @access public
   */
  public function __construct($TopLevelBookmark)
  {
    $this->TopLevelBookmark = $TopLevelBookmark;
  }

}
class MergeSettings
{

  /**
   * 
   * @var boolean $BreakOnError
   * @access public
   */
  public $BreakOnError;

  /**
   * 
   * @var PDFProfile $PDFProfile
   * @access public
   */
  public $PDFProfile;

  /**
   * 
   * @var string $OpenPassword
   * @access public
   */
  public $OpenPassword;

  /**
   * 
   * @var string $OwnerPassword
   * @access public
   */
  public $OwnerPassword;

  /**
   * 
   * @var SecurityOptions $SecurityOptions
   * @access public
   */
  public $SecurityOptions;

  /**
   * 
   * @var array $Watermarks
   * @access public
   */
  public $Watermarks;

  /**
   * 
   * @var boolean $OmitErrorPages
   * @access public
   */
  public $OmitErrorPages;

  /**
   * 
   * @var OutputFormatSpecificSettings $OutputFormatSpecificSettings
   * @access public
   */
  public $OutputFormatSpecificSettings;

  /**
   * 
   * @param boolean $BreakOnError
   * @param PDFProfile $PDFProfile
   * @param string $OpenPassword
   * @param string $OwnerPassword
   * @param SecurityOptions $SecurityOptions
   * @param array $Watermarks
   * @param boolean $OmitErrorPages
   * @param OutputFormatSpecificSettings $OutputFormatSpecificSettings
   * @access public
   */
  public function __construct($BreakOnError, $PDFProfile, $OpenPassword, $OwnerPassword, $SecurityOptions, $Watermarks, $OmitErrorPages, $OutputFormatSpecificSettings)
  {
    $this->BreakOnError = $BreakOnError;
    $this->PDFProfile = $PDFProfile;
    $this->OpenPassword = $OpenPassword;
    $this->OwnerPassword = $OwnerPassword;
    $this->SecurityOptions = $SecurityOptions;
    $this->Watermarks = $Watermarks;
    $this->OmitErrorPages = $OmitErrorPages;
    $this->OutputFormatSpecificSettings = $OutputFormatSpecificSettings;
  }

}
class FileSplitOptions
{

  /**
   * 
   * @var FileSplitType $FileSplitType
   * @access public
   */
  public $FileSplitType;

  /**
   * 
   * @var int $BatchSize
   * @access public
   */
  public $BatchSize;

  /**
   * 
   * @var int $BookmarkLevel
   * @access public
   */
  public $BookmarkLevel;

  /**
   * 
   * @var string $FileNameTemplate
   * @access public
   */
  public $FileNameTemplate;

  /**
   * 
   * @param FileSplitType $FileSplitType
   * @param int $BatchSize
   * @param int $BookmarkLevel
   * @param string $FileNameTemplate
   * @access public
   */
  public function __construct($FileSplitType, $BatchSize, $BookmarkLevel, $FileNameTemplate)
  {
    $this->FileSplitType = $FileSplitType;
    $this->BatchSize = $BatchSize;
    $this->BookmarkLevel = $BookmarkLevel;
    $this->FileNameTemplate = $FileNameTemplate;
  }

}
class BatchResults
{

  /**
   * 
   * @var array $Results
   * @access public
   */
  public $Results;

  /**
   * 
   * @param array $Results
   * @access public
   */
  public function __construct($Results)
  {
    $this->Results = $Results;
  }

}
class BatchResult
{

  /**
   * 
   * @var base64Binary $File
   * @access public
   */
  public $File;

  /**
   * 
   * @var string $FileName
   * @access public
   */
  public $FileName;

  /**
   * 
   * @param base64Binary $File
   * @param string $FileName
   * @access public
   */
  public function __construct($File, $FileName)
  {
    $this->File = $File;
    $this->FileName = $FileName;
  }

}
class Configuration
{

  /**
   * 
   * @var string $ConversionServerAddress
   * @access public
   */
  public $ConversionServerAddress;

  /**
   * 
   * @var array $Converters
   * @access public
   */
  public $Converters;

  /**
   * 
   * @param string $ConversionServerAddress
   * @param array $Converters
   * @access public
   */
  public function __construct($ConversionServerAddress, $Converters)
  {
    $this->ConversionServerAddress = $ConversionServerAddress;
    $this->Converters = $Converters;
  }

}
class ConverterConfiguration
{

  /**
   * 
   * @var string $ConverterName
   * @access public
   */
  public $ConverterName;

  /**
   * 
   * @var ConversionFidelities $SupportedFidelity
   * @access public
   */
  public $SupportedFidelity;

  /**
   * 
   * @var array $SupportedFileExtensions
   * @access public
   */
  public $SupportedFileExtensions;

  /**
   * 
   * @var string $Description
   * @access public
   */
  public $Description;

  /**
   * 
   * @var array $SupportedOutputFormats
   * @access public
   */
  public $SupportedOutputFormats;

  /**
   * 
   * @param string $ConverterName
   * @param ConversionFidelities $SupportedFidelity
   * @param array $SupportedFileExtensions
   * @param string $Description
   * @param array $SupportedOutputFormats
   * @access public
   */
  public function __construct($ConverterName, $SupportedFidelity, $SupportedFileExtensions, $Description, $SupportedOutputFormats)
  {
    $this->ConverterName = $ConverterName;
    $this->SupportedFidelity = $SupportedFidelity;
    $this->SupportedFileExtensions = $SupportedFileExtensions;
    $this->Description = $Description;
    $this->SupportedOutputFormats = $SupportedOutputFormats;
  }

}
class DiagnosticRequestItem
{

  /**
   * 
   * @var string $ConverterName
   * @access public
   */
  public $ConverterName;

  /**
   * 
   * @param string $ConverterName
   * @access public
   */
  public function __construct($ConverterName)
  {
    $this->ConverterName = $ConverterName;
  }

}
class Diagnostics
{

  /**
   * 
   * @var array $Items
   * @access public
   */
  public $Items;

  /**
   * 
   * @param array $Items
   * @access public
   */
  public function __construct($Items)
  {
    $this->Items = $Items;
  }

}
class DiagnosticResultItem
{

  /**
   * 
   * @var boolean $Valid
   * @access public
   */
  public $Valid;

  /**
   * 
   * @var WebServiceExceptionType $ExceptionType
   * @access public
   */
  public $ExceptionType;

  /**
   * 
   * @var string $ConverterName
   * @access public
   */
  public $ConverterName;

  /**
   * 
   * @param boolean $Valid
   * @param WebServiceExceptionType $ExceptionType
   * @param string $ConverterName
   * @access public
   */
  public function __construct($Valid, $ExceptionType, $ConverterName)
  {
    $this->Valid = $Valid;
    $this->ExceptionType = $ExceptionType;
    $this->ConverterName = $ConverterName;
  }

}
class Convert
{

  /**
   * 
   * @var base64Binary $sourceFile
   * @access public
   */
  public $sourceFile;

  /**
   * 
   * @var OpenOptions $openOptions
   * @access public
   */
  public $openOptions;

  /**
   * 
   * @var ConversionSettings $conversionSettings
   * @access public
   */
  public $conversionSettings;

  /**
   * 
   * @param base64Binary $sourceFile
   * @param OpenOptions $openOptions
   * @param ConversionSettings $conversionSettings
   * @access public
   */
  public function __construct($sourceFile, $openOptions, $conversionSettings)
  {
    $this->sourceFile = $sourceFile;
    $this->openOptions = $openOptions;
    $this->conversionSettings = $conversionSettings;
  }

}
class ConvertResponse
{

  /**
   * 
   * @var base64Binary $ConvertResult
   * @access public
   */
  public $ConvertResult;

  /**
   * 
   * @param base64Binary $ConvertResult
   * @access public
   */
  public function __construct($ConvertResult)
  {
    $this->ConvertResult = $ConvertResult;
  }

}
class ApplyWatermark
{

  /**
   * 
   * @var base64Binary $sourceFile
   * @access public
   */
  public $sourceFile;

  /**
   * 
   * @var OpenOptions $openOptions
   * @access public
   */
  public $openOptions;

  /**
   * 
   * @var ConversionSettings $conversionSettings
   * @access public
   */
  public $conversionSettings;

  /**
   * 
   * @param base64Binary $sourceFile
   * @param OpenOptions $openOptions
   * @param ConversionSettings $conversionSettings
   * @access public
   */
  public function __construct($sourceFile, $openOptions, $conversionSettings)
  {
    $this->sourceFile = $sourceFile;
    $this->openOptions = $openOptions;
    $this->conversionSettings = $conversionSettings;
  }

}
class ApplyWatermarkResponse
{

  /**
   * 
   * @var base64Binary $ApplyWatermarkResult
   * @access public
   */
  public $ApplyWatermarkResult;

  /**
   * 
   * @param base64Binary $ApplyWatermarkResult
   * @access public
   */
  public function __construct($ApplyWatermarkResult)
  {
    $this->ApplyWatermarkResult = $ApplyWatermarkResult;
  }

}
class ApplySecurity
{

  /**
   * 
   * @var base64Binary $sourceFile
   * @access public
   */
  public $sourceFile;

  /**
   * 
   * @var OpenOptions $openOptions
   * @access public
   */
  public $openOptions;

  /**
   * 
   * @var ConversionSettings $conversionSettings
   * @access public
   */
  public $conversionSettings;

  /**
   * 
   * @param base64Binary $sourceFile
   * @param OpenOptions $openOptions
   * @param ConversionSettings $conversionSettings
   * @access public
   */
  public function __construct($sourceFile, $openOptions, $conversionSettings)
  {
    $this->sourceFile = $sourceFile;
    $this->openOptions = $openOptions;
    $this->conversionSettings = $conversionSettings;
  }

}
class ApplySecurityResponse
{

  /**
   * 
   * @var base64Binary $ApplySecurityResult
   * @access public
   */
  public $ApplySecurityResult;

  /**
   * 
   * @param base64Binary $ApplySecurityResult
   * @access public
   */
  public function __construct($ApplySecurityResult)
  {
    $this->ApplySecurityResult = $ApplySecurityResult;
  }

}
class ProcessChanges
{

  /**
   * 
   * @var base64Binary $sourceFile
   * @access public
   */
  public $sourceFile;

  /**
   * 
   * @var OpenOptions $openOptions
   * @access public
   */
  public $openOptions;

  /**
   * 
   * @var ConversionSettings $conversionSettings
   * @access public
   */
  public $conversionSettings;

  /**
   * 
   * @param base64Binary $sourceFile
   * @param OpenOptions $openOptions
   * @param ConversionSettings $conversionSettings
   * @access public
   */
  public function __construct($sourceFile, $openOptions, $conversionSettings)
  {
    $this->sourceFile = $sourceFile;
    $this->openOptions = $openOptions;
    $this->conversionSettings = $conversionSettings;
  }

}
class ProcessChangesResponse
{

  /**
   * 
   * @var base64Binary $ProcessChangesResult
   * @access public
   */
  public $ProcessChangesResult;

  /**
   * 
   * @param base64Binary $ProcessChangesResult
   * @access public
   */
  public function __construct($ProcessChangesResult)
  {
    $this->ProcessChangesResult = $ProcessChangesResult;
  }

}
class ProcessBatch
{

  /**
   * 
   * @var ProcessingOptions $options
   * @access public
   */
  public $options;

  /**
   * 
   * @param ProcessingOptions $options
   * @access public
   */
  public function __construct($options)
  {
    $this->options = $options;
  }

}
class ProcessBatchResponse
{

  /**
   * 
   * @var BatchResults $ProcessBatchResult
   * @access public
   */
  public $ProcessBatchResult;

  /**
   * 
   * @param BatchResults $ProcessBatchResult
   * @access public
   */
  public function __construct($ProcessBatchResult)
  {
    $this->ProcessBatchResult = $ProcessBatchResult;
  }

}
class GetConfiguration
{

  /**
   * 
   * @access public
   */
  public function __construct()
  {
  
  }

}
class GetConfigurationResponse
{

  /**
   * 
   * @var Configuration $GetConfigurationResult
   * @access public
   */
  public $GetConfigurationResult;

  /**
   * 
   * @param Configuration $GetConfigurationResult
   * @access public
   */
  public function __construct($GetConfigurationResult)
  {
    $this->GetConfigurationResult = $GetConfigurationResult;
  }

}
class GetDiagnostics
{

  /**
   * 
   * @var array $convertersToDiagnose
   * @access public
   */
  public $convertersToDiagnose;

  /**
   * 
   * @param array $convertersToDiagnose
   * @access public
   */
  public function __construct($convertersToDiagnose)
  {
    $this->convertersToDiagnose = $convertersToDiagnose;
  }

}
class GetDiagnosticsResponse
{

  /**
   * 
   * @var Diagnostics $GetDiagnosticsResult
   * @access public
   */
  public $GetDiagnosticsResult;

  /**
   * 
   * @param Diagnostics $GetDiagnosticsResult
   * @access public
   */
  public function __construct($GetDiagnosticsResult)
  {
    $this->GetDiagnosticsResult = $GetDiagnosticsResult;
  }

}
