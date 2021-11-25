<?php

// autoload_classmap.php @generated by TYPO3

$typo3InstallDir = \TYPO3\CMS\Core\Core\Environment::getPublicPath() . '/';

return array(
    'EBT\\ExtensionBuilder\\Configuration\\ExtensionBuilderConfigurationManager' => $typo3InstallDir . 'typo3conf/ext/extension_builder/Classes/Configuration/ExtensionBuilderConfigurationManager.php',
    'EBT\\ExtensionBuilder\\Controller\\BuilderModuleController' => $typo3InstallDir . 'typo3conf/ext/extension_builder/Classes/Controller/BuilderModuleController.php',
    'EBT\\ExtensionBuilder\\Domain\\Exception\\ExtensionException' => $typo3InstallDir . 'typo3conf/ext/extension_builder/Classes/Domain/Exception/ExtensionException.php',
    'EBT\\ExtensionBuilder\\Domain\\Model\\AbstractObject' => $typo3InstallDir . 'typo3conf/ext/extension_builder/Classes/Domain/Model/AbstractObject.php',
    'EBT\\ExtensionBuilder\\Domain\\Model\\BackendModule' => $typo3InstallDir . 'typo3conf/ext/extension_builder/Classes/Domain/Model/BackendModule.php',
    'EBT\\ExtensionBuilder\\Domain\\Model\\ClassObject\\ClassObject' => $typo3InstallDir . 'typo3conf/ext/extension_builder/Classes/Domain/Model/ClassObject/ClassObject.php',
    'EBT\\ExtensionBuilder\\Domain\\Model\\ClassObject\\Comment' => $typo3InstallDir . 'typo3conf/ext/extension_builder/Classes/Domain/Model/ClassObject/Comment.php',
    'EBT\\ExtensionBuilder\\Domain\\Model\\ClassObject\\DocComment' => $typo3InstallDir . 'typo3conf/ext/extension_builder/Classes/Domain/Model/ClassObject/DocComment.php',
    'EBT\\ExtensionBuilder\\Domain\\Model\\ClassObject\\Method' => $typo3InstallDir . 'typo3conf/ext/extension_builder/Classes/Domain/Model/ClassObject/Method.php',
    'EBT\\ExtensionBuilder\\Domain\\Model\\ClassObject\\MethodParameter' => $typo3InstallDir . 'typo3conf/ext/extension_builder/Classes/Domain/Model/ClassObject/MethodParameter.php',
    'EBT\\ExtensionBuilder\\Domain\\Model\\ClassObject\\Property' => $typo3InstallDir . 'typo3conf/ext/extension_builder/Classes/Domain/Model/ClassObject/Property.php',
    'EBT\\ExtensionBuilder\\Domain\\Model\\Container' => $typo3InstallDir . 'typo3conf/ext/extension_builder/Classes/Domain/Model/Container.php',
    'EBT\\ExtensionBuilder\\Domain\\Model\\DomainObject' => $typo3InstallDir . 'typo3conf/ext/extension_builder/Classes/Domain/Model/DomainObject.php',
    'EBT\\ExtensionBuilder\\Domain\\Model\\DomainObject\\AbstractProperty' => $typo3InstallDir . 'typo3conf/ext/extension_builder/Classes/Domain/Model/DomainObject/AbstractProperty.php',
    'EBT\\ExtensionBuilder\\Domain\\Model\\DomainObject\\Action' => $typo3InstallDir . 'typo3conf/ext/extension_builder/Classes/Domain/Model/DomainObject/Action.php',
    'EBT\\ExtensionBuilder\\Domain\\Model\\DomainObject\\BooleanProperty' => $typo3InstallDir . 'typo3conf/ext/extension_builder/Classes/Domain/Model/DomainObject/BooleanProperty.php',
    'EBT\\ExtensionBuilder\\Domain\\Model\\DomainObject\\ColorPickerProperty' => $typo3InstallDir . 'typo3conf/ext/extension_builder/Classes/Domain/Model/DomainObject/ColorPickerProperty.php',
    'EBT\\ExtensionBuilder\\Domain\\Model\\DomainObject\\DateProperty' => $typo3InstallDir . 'typo3conf/ext/extension_builder/Classes/Domain/Model/DomainObject/DateProperty.php',
    'EBT\\ExtensionBuilder\\Domain\\Model\\DomainObject\\DateTimeProperty' => $typo3InstallDir . 'typo3conf/ext/extension_builder/Classes/Domain/Model/DomainObject/DateTimeProperty.php',
    'EBT\\ExtensionBuilder\\Domain\\Model\\DomainObject\\EmailProperty' => $typo3InstallDir . 'typo3conf/ext/extension_builder/Classes/Domain/Model/DomainObject/EmailProperty.php',
    'EBT\\ExtensionBuilder\\Domain\\Model\\DomainObject\\FileProperty' => $typo3InstallDir . 'typo3conf/ext/extension_builder/Classes/Domain/Model/DomainObject/FileProperty.php',
    'EBT\\ExtensionBuilder\\Domain\\Model\\DomainObject\\FloatProperty' => $typo3InstallDir . 'typo3conf/ext/extension_builder/Classes/Domain/Model/DomainObject/FloatProperty.php',
    'EBT\\ExtensionBuilder\\Domain\\Model\\DomainObject\\ImageProperty' => $typo3InstallDir . 'typo3conf/ext/extension_builder/Classes/Domain/Model/DomainObject/ImageProperty.php',
    'EBT\\ExtensionBuilder\\Domain\\Model\\DomainObject\\InputLinkProperty' => $typo3InstallDir . 'typo3conf/ext/extension_builder/Classes/Domain/Model/DomainObject/InputLinkProperty.php',
    'EBT\\ExtensionBuilder\\Domain\\Model\\DomainObject\\IntegerProperty' => $typo3InstallDir . 'typo3conf/ext/extension_builder/Classes/Domain/Model/DomainObject/IntegerProperty.php',
    'EBT\\ExtensionBuilder\\Domain\\Model\\DomainObject\\NativeDateProperty' => $typo3InstallDir . 'typo3conf/ext/extension_builder/Classes/Domain/Model/DomainObject/NativeDateProperty.php',
    'EBT\\ExtensionBuilder\\Domain\\Model\\DomainObject\\NativeDateTimeProperty' => $typo3InstallDir . 'typo3conf/ext/extension_builder/Classes/Domain/Model/DomainObject/NativeDateTimeProperty.php',
    'EBT\\ExtensionBuilder\\Domain\\Model\\DomainObject\\NativeTimeProperty' => $typo3InstallDir . 'typo3conf/ext/extension_builder/Classes/Domain/Model/DomainObject/NativeTimeProperty.php',
    'EBT\\ExtensionBuilder\\Domain\\Model\\DomainObject\\NoneProperty' => $typo3InstallDir . 'typo3conf/ext/extension_builder/Classes/Domain/Model/DomainObject/NoneProperty.php',
    'EBT\\ExtensionBuilder\\Domain\\Model\\DomainObject\\PassThroughProperty' => $typo3InstallDir . 'typo3conf/ext/extension_builder/Classes/Domain/Model/DomainObject/PassThroughProperty.php',
    'EBT\\ExtensionBuilder\\Domain\\Model\\DomainObject\\PasswordProperty' => $typo3InstallDir . 'typo3conf/ext/extension_builder/Classes/Domain/Model/DomainObject/PasswordProperty.php',
    'EBT\\ExtensionBuilder\\Domain\\Model\\DomainObject\\Relation\\AbstractRelation' => $typo3InstallDir . 'typo3conf/ext/extension_builder/Classes/Domain/Model/DomainObject/Relation/AbstractRelation.php',
    'EBT\\ExtensionBuilder\\Domain\\Model\\DomainObject\\Relation\\AnyToManyRelation' => $typo3InstallDir . 'typo3conf/ext/extension_builder/Classes/Domain/Model/DomainObject/Relation/AnyToManyRelation.php',
    'EBT\\ExtensionBuilder\\Domain\\Model\\DomainObject\\Relation\\ManyToManyRelation' => $typo3InstallDir . 'typo3conf/ext/extension_builder/Classes/Domain/Model/DomainObject/Relation/ManyToManyRelation.php',
    'EBT\\ExtensionBuilder\\Domain\\Model\\DomainObject\\Relation\\ManyToOneRelation' => $typo3InstallDir . 'typo3conf/ext/extension_builder/Classes/Domain/Model/DomainObject/Relation/ManyToOneRelation.php',
    'EBT\\ExtensionBuilder\\Domain\\Model\\DomainObject\\Relation\\ZeroToManyRelation' => $typo3InstallDir . 'typo3conf/ext/extension_builder/Classes/Domain/Model/DomainObject/Relation/ZeroToManyRelation.php',
    'EBT\\ExtensionBuilder\\Domain\\Model\\DomainObject\\Relation\\ZeroToOneRelation' => $typo3InstallDir . 'typo3conf/ext/extension_builder/Classes/Domain/Model/DomainObject/Relation/ZeroToOneRelation.php',
    'EBT\\ExtensionBuilder\\Domain\\Model\\DomainObject\\RichTextProperty' => $typo3InstallDir . 'typo3conf/ext/extension_builder/Classes/Domain/Model/DomainObject/RichTextProperty.php',
    'EBT\\ExtensionBuilder\\Domain\\Model\\DomainObject\\SelectProperty' => $typo3InstallDir . 'typo3conf/ext/extension_builder/Classes/Domain/Model/DomainObject/SelectProperty.php',
    'EBT\\ExtensionBuilder\\Domain\\Model\\DomainObject\\SlugProperty' => $typo3InstallDir . 'typo3conf/ext/extension_builder/Classes/Domain/Model/DomainObject/SlugProperty.php',
    'EBT\\ExtensionBuilder\\Domain\\Model\\DomainObject\\StringProperty' => $typo3InstallDir . 'typo3conf/ext/extension_builder/Classes/Domain/Model/DomainObject/StringProperty.php',
    'EBT\\ExtensionBuilder\\Domain\\Model\\DomainObject\\TextProperty' => $typo3InstallDir . 'typo3conf/ext/extension_builder/Classes/Domain/Model/DomainObject/TextProperty.php',
    'EBT\\ExtensionBuilder\\Domain\\Model\\DomainObject\\TimeProperty' => $typo3InstallDir . 'typo3conf/ext/extension_builder/Classes/Domain/Model/DomainObject/TimeProperty.php',
    'EBT\\ExtensionBuilder\\Domain\\Model\\DomainObject\\TimeSecProperty' => $typo3InstallDir . 'typo3conf/ext/extension_builder/Classes/Domain/Model/DomainObject/TimeSecProperty.php',
    'EBT\\ExtensionBuilder\\Domain\\Model\\Extension' => $typo3InstallDir . 'typo3conf/ext/extension_builder/Classes/Domain/Model/Extension.php',
    'EBT\\ExtensionBuilder\\Domain\\Model\\File' => $typo3InstallDir . 'typo3conf/ext/extension_builder/Classes/Domain/Model/File.php',
    'EBT\\ExtensionBuilder\\Domain\\Model\\FunctionObject' => $typo3InstallDir . 'typo3conf/ext/extension_builder/Classes/Domain/Model/FunctionObject.php',
    'EBT\\ExtensionBuilder\\Domain\\Model\\NamespaceObject' => $typo3InstallDir . 'typo3conf/ext/extension_builder/Classes/Domain/Model/NamespaceObject.php',
    'EBT\\ExtensionBuilder\\Domain\\Model\\Person' => $typo3InstallDir . 'typo3conf/ext/extension_builder/Classes/Domain/Model/Person.php',
    'EBT\\ExtensionBuilder\\Domain\\Model\\Plugin' => $typo3InstallDir . 'typo3conf/ext/extension_builder/Classes/Domain/Model/Plugin.php',
    'EBT\\ExtensionBuilder\\Domain\\Repository\\ExtensionRepository' => $typo3InstallDir . 'typo3conf/ext/extension_builder/Classes/Domain/Repository/ExtensionRepository.php',
    'EBT\\ExtensionBuilder\\Domain\\Validator\\ExtensionValidator' => $typo3InstallDir . 'typo3conf/ext/extension_builder/Classes/Domain/Validator/ExtensionValidator.php',
    'EBT\\ExtensionBuilder\\Exception' => $typo3InstallDir . 'typo3conf/ext/extension_builder/Classes/Exception.php',
    'EBT\\ExtensionBuilder\\Exception\\FileNotFoundException' => $typo3InstallDir . 'typo3conf/ext/extension_builder/Classes/Exception/FileNotFoundException.php',
    'EBT\\ExtensionBuilder\\Exception\\ParseError' => $typo3InstallDir . 'typo3conf/ext/extension_builder/Classes/Exception/ParseError.php',
    'EBT\\ExtensionBuilder\\Exception\\SyntaxError' => $typo3InstallDir . 'typo3conf/ext/extension_builder/Classes/Exception/SyntaxError.php',
    'EBT\\ExtensionBuilder\\Factory\\BackendModuleFactory' => $typo3InstallDir . 'typo3conf/ext/extension_builder/Classes/Factory/BackendModuleFactory.php',
    'EBT\\ExtensionBuilder\\Factory\\PersonFactory' => $typo3InstallDir . 'typo3conf/ext/extension_builder/Classes/Factory/PersonFactory.php',
    'EBT\\ExtensionBuilder\\Factory\\PluginFactory' => $typo3InstallDir . 'typo3conf/ext/extension_builder/Classes/Factory/PluginFactory.php',
    'EBT\\ExtensionBuilder\\Parser\\ClassFactory' => $typo3InstallDir . 'typo3conf/ext/extension_builder/Classes/Parser/ClassFactory.php',
    'EBT\\ExtensionBuilder\\Parser\\ClassFactoryInterface' => $typo3InstallDir . 'typo3conf/ext/extension_builder/Classes/Parser/ClassFactoryInterface.php',
    'EBT\\ExtensionBuilder\\Parser\\ExtendedClasses\\RawComment' => $typo3InstallDir . 'typo3conf/ext/extension_builder/Classes/Parser/ExtendedClasses/RawComment.php',
    'EBT\\ExtensionBuilder\\Parser\\NodeFactory' => $typo3InstallDir . 'typo3conf/ext/extension_builder/Classes/Parser/NodeFactory.php',
    'EBT\\ExtensionBuilder\\Parser\\Traverser' => $typo3InstallDir . 'typo3conf/ext/extension_builder/Classes/Parser/Traverser.php',
    'EBT\\ExtensionBuilder\\Parser\\TraverserInterface' => $typo3InstallDir . 'typo3conf/ext/extension_builder/Classes/Parser/TraverserInterface.php',
    'EBT\\ExtensionBuilder\\Parser\\Utility\\NodeConverter' => $typo3InstallDir . 'typo3conf/ext/extension_builder/Classes/Parser/Utility/NodeConverter.php',
    'EBT\\ExtensionBuilder\\Parser\\Visitor\\FileVisitor' => $typo3InstallDir . 'typo3conf/ext/extension_builder/Classes/Parser/Visitor/FileVisitor.php',
    'EBT\\ExtensionBuilder\\Parser\\Visitor\\FileVisitorInterface' => $typo3InstallDir . 'typo3conf/ext/extension_builder/Classes/Parser/Visitor/FileVisitorInterface.php',
    'EBT\\ExtensionBuilder\\Parser\\Visitor\\FormatVisitor' => $typo3InstallDir . 'typo3conf/ext/extension_builder/Classes/Parser/Visitor/FormatVisitor.php',
    'EBT\\ExtensionBuilder\\Parser\\Visitor\\ReplaceClassNamesVisitor' => $typo3InstallDir . 'typo3conf/ext/extension_builder/Classes/Parser/Visitor/ReplaceClassNamesVisitor.php',
    'EBT\\ExtensionBuilder\\Parser\\Visitor\\ReplaceVisitor' => $typo3InstallDir . 'typo3conf/ext/extension_builder/Classes/Parser/Visitor/ReplaceVisitor.php',
    'EBT\\ExtensionBuilder\\Service\\ClassBuilder' => $typo3InstallDir . 'typo3conf/ext/extension_builder/Classes/Service/ClassBuilder.php',
    'EBT\\ExtensionBuilder\\Service\\ExtensionSchemaBuilder' => $typo3InstallDir . 'typo3conf/ext/extension_builder/Classes/Service/ExtensionSchemaBuilder.php',
    'EBT\\ExtensionBuilder\\Service\\ExtensionService' => $typo3InstallDir . 'typo3conf/ext/extension_builder/Classes/Service/ExtensionService.php',
    'EBT\\ExtensionBuilder\\Service\\FileGenerator' => $typo3InstallDir . 'typo3conf/ext/extension_builder/Classes/Service/FileGenerator.php',
    'EBT\\ExtensionBuilder\\Service\\LocalizationService' => $typo3InstallDir . 'typo3conf/ext/extension_builder/Classes/Service/LocalizationService.php',
    'EBT\\ExtensionBuilder\\Service\\ObjectSchemaBuilder' => $typo3InstallDir . 'typo3conf/ext/extension_builder/Classes/Service/ObjectSchemaBuilder.php',
    'EBT\\ExtensionBuilder\\Service\\ParserService' => $typo3InstallDir . 'typo3conf/ext/extension_builder/Classes/Service/ParserService.php',
    'EBT\\ExtensionBuilder\\Service\\Printer' => $typo3InstallDir . 'typo3conf/ext/extension_builder/Classes/Service/Printer.php',
    'EBT\\ExtensionBuilder\\Service\\RoundTrip' => $typo3InstallDir . 'typo3conf/ext/extension_builder/Classes/Service/RoundTrip.php',
    'EBT\\ExtensionBuilder\\Service\\ValidationService' => $typo3InstallDir . 'typo3conf/ext/extension_builder/Classes/Service/ValidationService.php',
    'EBT\\ExtensionBuilder\\Template\\Components\\Buttons\\LinkButtonWithId' => $typo3InstallDir . 'typo3conf/ext/extension_builder/Classes/Template/Components/Buttons/LinkButtonWithId.php',
    'EBT\\ExtensionBuilder\\Utility\\ExtensionInstallationStatus' => $typo3InstallDir . 'typo3conf/ext/extension_builder/Classes/Utility/ExtensionInstallationStatus.php',
    'EBT\\ExtensionBuilder\\Utility\\Inflector' => $typo3InstallDir . 'typo3conf/ext/extension_builder/Classes/Utility/Inflector.php',
    'EBT\\ExtensionBuilder\\Utility\\SpycYAMLParser' => $typo3InstallDir . 'typo3conf/ext/extension_builder/Classes/Utility/SpycYAMLParser.php',
    'EBT\\ExtensionBuilder\\Utility\\Tools' => $typo3InstallDir . 'typo3conf/ext/extension_builder/Classes/Utility/Tools.php',
    'EBT\\ExtensionBuilder\\ViewHelpers\\BeFuncViewHelper' => $typo3InstallDir . 'typo3conf/ext/extension_builder/Classes/ViewHelpers/BeFuncViewHelper.php',
    'EBT\\ExtensionBuilder\\ViewHelpers\\ClosingTagViewHelper' => $typo3InstallDir . 'typo3conf/ext/extension_builder/Classes/ViewHelpers/ClosingTagViewHelper.php',
    'EBT\\ExtensionBuilder\\ViewHelpers\\CopyrightViewHelper' => $typo3InstallDir . 'typo3conf/ext/extension_builder/Classes/ViewHelpers/CopyrightViewHelper.php',
    'EBT\\ExtensionBuilder\\ViewHelpers\\CurlyBracketsViewHelper' => $typo3InstallDir . 'typo3conf/ext/extension_builder/Classes/ViewHelpers/CurlyBracketsViewHelper.php',
    'EBT\\ExtensionBuilder\\ViewHelpers\\DomainObjectChecksViewHelper' => $typo3InstallDir . 'typo3conf/ext/extension_builder/Classes/ViewHelpers/DomainObjectChecksViewHelper.php',
    'EBT\\ExtensionBuilder\\ViewHelpers\\Format\\IndentViewHelper' => $typo3InstallDir . 'typo3conf/ext/extension_builder/Classes/ViewHelpers/Format/IndentViewHelper.php',
    'EBT\\ExtensionBuilder\\ViewHelpers\\Format\\LowercaseFirstViewHelper' => $typo3InstallDir . 'typo3conf/ext/extension_builder/Classes/ViewHelpers/Format/LowercaseFirstViewHelper.php',
    'EBT\\ExtensionBuilder\\ViewHelpers\\Format\\QuoteStringViewHelper' => $typo3InstallDir . 'typo3conf/ext/extension_builder/Classes/ViewHelpers/Format/QuoteStringViewHelper.php',
    'EBT\\ExtensionBuilder\\ViewHelpers\\Format\\RemoveMultipleNewlinesViewHelper' => $typo3InstallDir . 'typo3conf/ext/extension_builder/Classes/ViewHelpers/Format/RemoveMultipleNewlinesViewHelper.php',
    'EBT\\ExtensionBuilder\\ViewHelpers\\Format\\TrimViewHelper' => $typo3InstallDir . 'typo3conf/ext/extension_builder/Classes/ViewHelpers/Format/TrimViewHelper.php',
    'EBT\\ExtensionBuilder\\ViewHelpers\\Format\\UppercaseFirstViewHelper' => $typo3InstallDir . 'typo3conf/ext/extension_builder/Classes/ViewHelpers/Format/UppercaseFirstViewHelper.php',
    'EBT\\ExtensionBuilder\\ViewHelpers\\HumanizeViewHelper' => $typo3InstallDir . 'typo3conf/ext/extension_builder/Classes/ViewHelpers/HumanizeViewHelper.php',
    'EBT\\ExtensionBuilder\\ViewHelpers\\ListForeignKeyRelationsViewHelper' => $typo3InstallDir . 'typo3conf/ext/extension_builder/Classes/ViewHelpers/ListForeignKeyRelationsViewHelper.php',
    'EBT\\ExtensionBuilder\\ViewHelpers\\MappingViewHelper' => $typo3InstallDir . 'typo3conf/ext/extension_builder/Classes/ViewHelpers/MappingViewHelper.php',
    'EBT\\ExtensionBuilder\\ViewHelpers\\MatchStringViewHelper' => $typo3InstallDir . 'typo3conf/ext/extension_builder/Classes/ViewHelpers/MatchStringViewHelper.php',
    'EBT\\ExtensionBuilder\\ViewHelpers\\OpeningTagViewHelper' => $typo3InstallDir . 'typo3conf/ext/extension_builder/Classes/ViewHelpers/OpeningTagViewHelper.php',
    'EBT\\ExtensionBuilder\\ViewHelpers\\PluralizeViewHelper' => $typo3InstallDir . 'typo3conf/ext/extension_builder/Classes/ViewHelpers/PluralizeViewHelper.php',
    'EBT\\ExtensionBuilder\\ViewHelpers\\PregReplaceViewHelper' => $typo3InstallDir . 'typo3conf/ext/extension_builder/Classes/ViewHelpers/PregReplaceViewHelper.php',
    'EBT\\ExtensionBuilder\\ViewHelpers\\RecordTypeViewHelper' => $typo3InstallDir . 'typo3conf/ext/extension_builder/Classes/ViewHelpers/RecordTypeViewHelper.php',
    'EBT\\ExtensionBuilder\\ViewHelpers\\SingularizeViewHelper' => $typo3InstallDir . 'typo3conf/ext/extension_builder/Classes/ViewHelpers/SingularizeViewHelper.php',
);