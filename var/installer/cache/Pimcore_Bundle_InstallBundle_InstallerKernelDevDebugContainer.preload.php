<?php

// This file has been auto-generated by the Symfony Dependency Injection Component
// You can reference it in the "opcache.preload" php.ini setting on PHP >= 7.4 when preloading is desired

use Symfony\Component\DependencyInjection\Dumper\Preloader;

if (in_array(PHP_SAPI, ['cli', 'phpdbg'], true)) {
    return;
}

require dirname(__DIR__, 3).'/vendor/autoload.php';
(require __DIR__.'/Pimcore_Bundle_InstallBundle_InstallerKernelDevDebugContainer.php')->set(\ContainerRVY10To\Pimcore_Bundle_InstallBundle_InstallerKernelDevDebugContainer::class, null);
require __DIR__.'/ContainerRVY10To/getVarDumper_ClonerService.php';
require __DIR__.'/ContainerRVY10To/getValidator_NotCompromisedPasswordService.php';
require __DIR__.'/ContainerRVY10To/getValidator_ExpressionService.php';
require __DIR__.'/ContainerRVY10To/getValidator_EmailService.php';
require __DIR__.'/ContainerRVY10To/getValidator_BuilderService.php';
require __DIR__.'/ContainerRVY10To/getTranslatorService.php';
require __DIR__.'/ContainerRVY10To/getTranslation_Loader_YmlService.php';
require __DIR__.'/ContainerRVY10To/getTranslation_Loader_XliffService.php';
require __DIR__.'/ContainerRVY10To/getTranslation_Loader_ResService.php';
require __DIR__.'/ContainerRVY10To/getTranslation_Loader_QtService.php';
require __DIR__.'/ContainerRVY10To/getTranslation_Loader_PoService.php';
require __DIR__.'/ContainerRVY10To/getTranslation_Loader_PhpService.php';
require __DIR__.'/ContainerRVY10To/getTranslation_Loader_MoService.php';
require __DIR__.'/ContainerRVY10To/getTranslation_Loader_JsonService.php';
require __DIR__.'/ContainerRVY10To/getTranslation_Loader_IniService.php';
require __DIR__.'/ContainerRVY10To/getTranslation_Loader_DatService.php';
require __DIR__.'/ContainerRVY10To/getTranslation_Loader_CsvService.php';
require __DIR__.'/ContainerRVY10To/getTexter_TransportsService.php';
require __DIR__.'/ContainerRVY10To/getServicesResetterService.php';
require __DIR__.'/ContainerRVY10To/getSerializer_Mapping_ClassMetadataFactoryService.php';
require __DIR__.'/ContainerRVY10To/getSecrets_VaultService.php';
require __DIR__.'/ContainerRVY10To/getRouting_LoaderService.php';
require __DIR__.'/ContainerRVY10To/getPropertyInfo_SerializerExtractorService.php';
require __DIR__.'/ContainerRVY10To/getPropertyInfoService.php';
require __DIR__.'/ContainerRVY10To/getPropertyAccessorService.php';
require __DIR__.'/ContainerRVY10To/getNotifier_TransportFactory_NullService.php';
require __DIR__.'/ContainerRVY10To/getMonolog_Logger_PimcoreService.php';
require __DIR__.'/ContainerRVY10To/getMonolog_Logger_MessengerService.php';
require __DIR__.'/ContainerRVY10To/getMonolog_Logger_MailerService.php';
require __DIR__.'/ContainerRVY10To/getMonolog_LoggerService.php';
require __DIR__.'/ContainerRVY10To/getMimeTypesService.php';
require __DIR__.'/ContainerRVY10To/getMessenger_Retry_SendFailedMessageForRetryListenerService.php';
require __DIR__.'/ContainerRVY10To/getMessenger_Middleware_SendMessageService.php';
require __DIR__.'/ContainerRVY10To/getMessenger_Listener_StopWorkerOnSigtermSignalListenerService.php';
require __DIR__.'/ContainerRVY10To/getMessenger_Listener_StopWorkerOnRestartSignalListenerService.php';
require __DIR__.'/ContainerRVY10To/getMessenger_DefaultBusService.php';
require __DIR__.'/ContainerRVY10To/getMessenger_Bus_Default_Middleware_TraceableService.php';
require __DIR__.'/ContainerRVY10To/getMessenger_Bus_Default_Middleware_HandleMessageService.php';
require __DIR__.'/ContainerRVY10To/getMailer_TransportFactory_SmtpService.php';
require __DIR__.'/ContainerRVY10To/getMailer_TransportFactory_SendmailService.php';
require __DIR__.'/ContainerRVY10To/getMailer_TransportFactory_NullService.php';
require __DIR__.'/ContainerRVY10To/getMailer_TransportFactory_NativeService.php';
require __DIR__.'/ContainerRVY10To/getHttpClientService.php';
require __DIR__.'/ContainerRVY10To/getForm_TypeGuesser_ValidatorService.php';
require __DIR__.'/ContainerRVY10To/getForm_TypeExtension_Upload_ValidatorService.php';
require __DIR__.'/ContainerRVY10To/getForm_TypeExtension_Form_ValidatorService.php';
require __DIR__.'/ContainerRVY10To/getForm_TypeExtension_Form_TransformationFailureHandlingService.php';
require __DIR__.'/ContainerRVY10To/getForm_TypeExtension_Form_HttpFoundationService.php';
require __DIR__.'/ContainerRVY10To/getForm_Type_FormService.php';
require __DIR__.'/ContainerRVY10To/getForm_Type_ColorService.php';
require __DIR__.'/ContainerRVY10To/getForm_Type_ChoiceService.php';
require __DIR__.'/ContainerRVY10To/getForm_RegistryService.php';
require __DIR__.'/ContainerRVY10To/getForm_ChoiceListFactory_CachedService.php';
require __DIR__.'/ContainerRVY10To/getErrorControllerService.php';
require __DIR__.'/ContainerRVY10To/getDebug_ArgumentResolver_VariadicService.php';
require __DIR__.'/ContainerRVY10To/getDebug_ArgumentResolver_SessionService.php';
require __DIR__.'/ContainerRVY10To/getDebug_ArgumentResolver_ServiceService.php';
require __DIR__.'/ContainerRVY10To/getDebug_ArgumentResolver_RequestAttributeService.php';
require __DIR__.'/ContainerRVY10To/getDebug_ArgumentResolver_RequestService.php';
require __DIR__.'/ContainerRVY10To/getDebug_ArgumentResolver_NotTaggedControllerService.php';
require __DIR__.'/ContainerRVY10To/getDebug_ArgumentResolver_DefaultService.php';
require __DIR__.'/ContainerRVY10To/getDataCollector_DumpService.php';
require __DIR__.'/ContainerRVY10To/getContainer_GetenvService.php';
require __DIR__.'/ContainerRVY10To/getContainer_EnvVarProcessorsLocatorService.php';
require __DIR__.'/ContainerRVY10To/getContainer_EnvVarProcessorService.php';
require __DIR__.'/ContainerRVY10To/getCache_ValidatorExpressionLanguageService.php';
require __DIR__.'/ContainerRVY10To/getCache_SystemClearerService.php';
require __DIR__.'/ContainerRVY10To/getCache_SystemService.php';
require __DIR__.'/ContainerRVY10To/getCache_RateLimiterService.php';
require __DIR__.'/ContainerRVY10To/getCache_Messenger_RestartWorkersSignalService.php';
require __DIR__.'/ContainerRVY10To/getCache_GlobalClearerService.php';
require __DIR__.'/ContainerRVY10To/getCache_AppClearerService.php';
require __DIR__.'/ContainerRVY10To/getCache_AppService.php';
require __DIR__.'/ContainerRVY10To/getAnnotations_ReaderService.php';
require __DIR__.'/ContainerRVY10To/getAnnotations_CachedReaderService.php';
require __DIR__.'/ContainerRVY10To/getTemplateControllerService.php';
require __DIR__.'/ContainerRVY10To/getRedirectControllerService.php';
require __DIR__.'/ContainerRVY10To/get_ServiceLocator_XUrKPVUService.php';
require __DIR__.'/ContainerRVY10To/get_ServiceLocator_FhAguBAService.php';
require __DIR__.'/ContainerRVY10To/get_Messenger_HandlerDescriptor_VMw0m61Service.php';
require __DIR__.'/ContainerRVY10To/get_Messenger_HandlerDescriptor_TGvt0LHService.php';
require __DIR__.'/ContainerRVY10To/get_Messenger_HandlerDescriptor_XZowc_TService.php';
require __DIR__.'/ContainerRVY10To/get_Messenger_HandlerDescriptor_Lml2ICsService.php';
require __DIR__.'/ContainerRVY10To/get_Container_Private_ValidatorService.php';
require __DIR__.'/ContainerRVY10To/get_Container_Private_SerializerService.php';
require __DIR__.'/ContainerRVY10To/get_Container_Private_Form_Type_FileService.php';
require __DIR__.'/ContainerRVY10To/get_Container_Private_Form_FactoryService.php';
require __DIR__.'/ContainerRVY10To/get_Container_Private_FilesystemService.php';
require __DIR__.'/ContainerRVY10To/get_Container_Private_CacheClearerService.php';

$classes = [];
$classes[] = 'Symfony\Bundle\FrameworkBundle\FrameworkBundle';
$classes[] = 'Symfony\Bundle\MonologBundle\MonologBundle';
$classes[] = 'Pimcore\Bundle\InstallBundle\PimcoreInstallBundle';
$classes[] = 'Symfony\Bundle\DebugBundle\DebugBundle';
$classes[] = 'Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer';
$classes[] = 'Symfony\Component\Filesystem\Filesystem';
$classes[] = 'Symfony\Component\Form\FormFactory';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\FileType';
$classes[] = 'Symfony\Component\Serializer\Serializer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\UnwrappingDenormalizer';
$classes[] = 'Symfony\Component\Messenger\Transport\Serialization\Normalizer\FlattenExceptionNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\ProblemNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\UidNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\DateTimeNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\ConstraintViolationListNormalizer';
$classes[] = 'Symfony\Component\Serializer\NameConverter\MetadataAwareNameConverter';
$classes[] = 'Symfony\Component\Serializer\Normalizer\MimeMessageNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\PropertyNormalizer';
$classes[] = 'Symfony\Component\Serializer\Mapping\ClassDiscriminatorFromClassMetadata';
$classes[] = 'Symfony\Component\Serializer\Normalizer\DateTimeZoneNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\DateIntervalNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\FormErrorNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\BackedEnumNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\DataUriNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\JsonSerializableNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\ArrayDenormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\ObjectNormalizer';
$classes[] = 'Symfony\Component\Serializer\Encoder\XmlEncoder';
$classes[] = 'Symfony\Component\Serializer\Encoder\JsonEncoder';
$classes[] = 'Symfony\Component\Serializer\Encoder\YamlEncoder';
$classes[] = 'Symfony\Component\Serializer\Encoder\CsvEncoder';
$classes[] = 'Symfony\Component\Validator\Validator\ValidatorInterface';
$classes[] = 'Symfony\Component\Messenger\Handler\HandlerDescriptor';
$classes[] = 'Symfony\Component\Notifier\Messenger\MessageHandler';
$classes[] = 'Symfony\Component\Mailer\Messenger\MessageHandler';
$classes[] = 'Symfony\Component\Mailer\Transport\Transports';
$classes[] = 'Symfony\Component\Mailer\Transport';
$classes[] = 'Symfony\Component\Notifier\Transport\Transports';
$classes[] = 'Symfony\Component\Notifier\Transport';
$classes[] = 'Symfony\Component\DependencyInjection\ServiceLocator';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\RedirectController';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\TemplateController';
$classes[] = 'Symfony\Component\Cache\Adapter\PhpArrayAdapter';
$classes[] = 'Doctrine\Common\Annotations\PsrCachedReader';
$classes[] = 'Doctrine\Common\Annotations\AnnotationReader';
$classes[] = 'Doctrine\Common\Annotations\AnnotationRegistry';
$classes[] = 'Symfony\Component\Cache\Adapter\AdapterInterface';
$classes[] = 'Symfony\Component\Cache\Adapter\AbstractAdapter';
$classes[] = 'Symfony\Component\Cache\Adapter\FilesystemAdapter';
$classes[] = 'Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer';
$classes[] = 'Symfony\Component\Cache\Marshaller\DefaultMarshaller';
$classes[] = 'Symfony\Component\Config\Resource\SelfCheckingResourceChecker';
$classes[] = 'Symfony\Component\Config\ResourceCheckerConfigCacheFactory';
$classes[] = 'Symfony\Component\DependencyInjection\EnvVarProcessor';
$classes[] = 'Symfony\Component\HttpKernel\DataCollector\DumpDataCollector';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\NotTaggedControllerValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\DebugHandlersListener';
$classes[] = 'Symfony\Bridge\Monolog\Logger';
$classes[] = 'Symfony\Component\HttpKernel\Debug\FileLinkFormatter';
$classes[] = 'Symfony\Component\Stopwatch\Stopwatch';
$classes[] = 'Symfony\Component\DependencyInjection\Config\ContainerParametersResourceChecker';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\DisallowRobotsIndexingListener';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ErrorController';
$classes[] = 'Symfony\Component\ErrorHandler\ErrorRenderer\SerializerErrorRenderer';
$classes[] = 'Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer';
$classes[] = 'Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher';
$classes[] = 'Symfony\Component\EventDispatcher\EventDispatcher';
$classes[] = 'Monolog\Handler\NullHandler';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ErrorListener';
$classes[] = 'Symfony\Component\Form\ChoiceList\Factory\CachingFactoryDecorator';
$classes[] = 'Symfony\Component\Form\ChoiceList\Factory\PropertyAccessDecorator';
$classes[] = 'Symfony\Component\Form\ChoiceList\Factory\DefaultChoiceListFactory';
$classes[] = 'Symfony\Component\Form\FormRegistry';
$classes[] = 'Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension';
$classes[] = 'Symfony\Component\Form\ResolvedFormTypeFactory';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\ChoiceType';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\ColorType';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\FormType';
$classes[] = 'Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension';
$classes[] = 'Symfony\Component\Form\Extension\HttpFoundation\HttpFoundationRequestHandler';
$classes[] = 'Symfony\Component\Form\Util\ServerParams';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\TransformationFailureExtension';
$classes[] = 'Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension';
$classes[] = 'Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension';
$classes[] = 'Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension';
$classes[] = 'Symfony\Component\Form\Extension\Validator\Type\UploadValidatorExtension';
$classes[] = 'Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser';
$classes[] = 'Symfony\Contracts\HttpClient\HttpClientInterface';
$classes[] = 'Symfony\Component\HttpClient\HttpClient';
$classes[] = 'Symfony\Component\Runtime\Runner\Symfony\HttpKernelRunner';
$classes[] = 'Symfony\Component\Runtime\Runner\Symfony\ResponseRunner';
$classes[] = 'Symfony\Component\Runtime\SymfonyRuntime';
$classes[] = 'Symfony\Component\HttpKernel\HttpKernel';
$classes[] = 'Symfony\Component\HttpKernel\Controller\TraceableControllerResolver';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\TraceableArgumentResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver';
$classes[] = 'Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory';
$classes[] = 'Pimcore\Bundle\InstallBundle\InstallerKernel';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\LocaleAwareListener';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\LocaleListener';
$classes[] = 'Symfony\Component\Mailer\EventListener\EnvelopeListener';
$classes[] = 'Symfony\Component\Mailer\EventListener\MessageLoggerListener';
$classes[] = 'Symfony\Component\Mailer\Transport\NativeTransportFactory';
$classes[] = 'Symfony\Component\Mailer\Transport\NullTransportFactory';
$classes[] = 'Symfony\Component\Mailer\Transport\SendmailTransportFactory';
$classes[] = 'Symfony\Component\Mailer\Transport\Smtp\EsmtpTransportFactory';
$classes[] = 'Symfony\Component\Messenger\Middleware\AddBusNameStampMiddleware';
$classes[] = 'Symfony\Component\Messenger\Middleware\HandleMessageMiddleware';
$classes[] = 'Symfony\Component\Messenger\Handler\HandlersLocator';
$classes[] = 'Symfony\Component\Messenger\Middleware\TraceableMiddleware';
$classes[] = 'Symfony\Component\Messenger\MessageBus';
$classes[] = 'Symfony\Component\Messenger\EventListener\AddErrorDetailsStampListener';
$classes[] = 'Symfony\Component\Messenger\EventListener\DispatchPcntlSignalListener';
$classes[] = 'Symfony\Component\Messenger\EventListener\StopWorkerOnRestartSignalListener';
$classes[] = 'Symfony\Component\Messenger\EventListener\StopWorkerOnSigtermSignalListener';
$classes[] = 'Symfony\Component\Messenger\EventListener\StopWorkerOnCustomStopExceptionListener';
$classes[] = 'Symfony\Component\Messenger\Middleware\DispatchAfterCurrentBusMiddleware';
$classes[] = 'Symfony\Component\Messenger\Middleware\FailedMessageProcessingMiddleware';
$classes[] = 'Symfony\Component\Messenger\Middleware\RejectRedeliveredMessageMiddleware';
$classes[] = 'Symfony\Component\Messenger\Middleware\SendMessageMiddleware';
$classes[] = 'Symfony\Component\Messenger\Transport\Sender\SendersLocator';
$classes[] = 'Symfony\Component\Messenger\EventListener\SendFailedMessageForRetryListener';
$classes[] = 'Symfony\Component\Mime\MimeTypes';
$classes[] = 'Monolog\Handler\StreamHandler';
$classes[] = 'Monolog\Processor\PsrLogMessageProcessor';
$classes[] = 'Symfony\Component\Notifier\EventListener\NotificationLoggerListener';
$classes[] = 'Symfony\Component\Notifier\Transport\NullTransportFactory';
$classes[] = 'Symfony\Component\PropertyAccess\PropertyAccessor';
$classes[] = 'Symfony\Component\Cache\Adapter\ArrayAdapter';
$classes[] = 'Symfony\Component\PropertyInfo\PropertyInfoExtractor';
$classes[] = 'Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor';
$classes[] = 'Symfony\Component\PropertyInfo\Extractor\SerializerExtractor';
$classes[] = 'Symfony\Component\HttpFoundation\RequestStack';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ResponseListener';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\Router';
$classes[] = 'Symfony\Component\DependencyInjection\ParameterBag\ContainerBag';
$classes[] = 'Symfony\Component\Routing\Matcher\ExpressionLanguageProvider';
$classes[] = 'Symfony\Component\Routing\RequestContext';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\RouterListener';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader';
$classes[] = 'Symfony\Component\Config\Loader\LoaderResolver';
$classes[] = 'Symfony\Component\Routing\Loader\XmlFileLoader';
$classes[] = 'Symfony\Component\HttpKernel\Config\FileLocator';
$classes[] = 'Symfony\Component\Routing\Loader\YamlFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\PhpFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\GlobFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\DirectoryLoader';
$classes[] = 'Symfony\Component\Routing\Loader\ContainerLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\AnnotatedRouteControllerLoader';
$classes[] = 'Symfony\Component\Routing\Loader\AnnotationDirectoryLoader';
$classes[] = 'Symfony\Component\Routing\Loader\AnnotationFileLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault';
$classes[] = 'Symfony\Component\String\LazyString';
$classes[] = 'Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactory';
$classes[] = 'Symfony\Component\Serializer\Mapping\Loader\LoaderChain';
$classes[] = 'Symfony\Component\Serializer\Mapping\Loader\AnnotationLoader';
$classes[] = 'Symfony\Component\DependencyInjection\ContainerInterface';
$classes[] = 'Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter';
$classes[] = 'Symfony\Component\String\Slugger\AsciiSlugger';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\StreamedResponseListener';
$classes[] = 'Symfony\Component\Translation\Loader\CsvFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\IcuDatFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\IniFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\JsonFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\MoFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\PhpFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\PoFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\QtFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\IcuResFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\XliffFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\YamlFileLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Translation\Translator';
$classes[] = 'Symfony\Component\Translation\Formatter\MessageFormatter';
$classes[] = 'Symfony\Component\Translation\IdentityTranslator';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ValidateRequestListener';
$classes[] = 'Symfony\Component\Validator\ValidatorBuilder';
$classes[] = 'Symfony\Component\Validator\Validation';
$classes[] = 'Symfony\Component\Validator\ContainerConstraintValidatorFactory';
$classes[] = 'Symfony\Component\Validator\Mapping\Loader\PropertyInfoLoader';
$classes[] = 'Symfony\Component\Validator\Constraints\EmailValidator';
$classes[] = 'Symfony\Component\Validator\Constraints\ExpressionValidator';
$classes[] = 'Symfony\Component\ExpressionLanguage\ExpressionLanguage';
$classes[] = 'Symfony\Component\Validator\Constraints\NotCompromisedPasswordValidator';
$classes[] = 'Symfony\Component\VarDumper\Cloner\VarCloner';
$classes[] = 'Symfony\Component\WebLink\EventListener\AddLinkHeaderListener';

$preloaded = Preloader::preload($classes);
