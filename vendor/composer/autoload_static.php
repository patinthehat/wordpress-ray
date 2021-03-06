<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit000e31ec00eb6e379fc2501d4709f6fe
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '25072dd6e2470089de65ae7bf11d3109' => __DIR__ . '/..' . '/symfony/polyfill-php72/bootstrap.php',
        'a4a119a56e50fbb293281d9a48007e0e' => __DIR__ . '/..' . '/symfony/polyfill-php80/bootstrap.php',
        '667aeda72477189d0494fecd327c3641' => __DIR__ . '/..' . '/symfony/var-dumper/Resources/functions/dump.php',
        '3074abeef0bacf5811f59e9dee6311d1' => __DIR__ . '/..' . '/spatie/ray/src/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'TypistTech\\Imposter\\Plugin\\' => 27,
            'TypistTech\\Imposter\\' => 20,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Php80\\' => 23,
            'Symfony\\Polyfill\\Php72\\' => 23,
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Contracts\\Service\\' => 26,
            'Symfony\\Component\\VarDumper\\' => 28,
            'Symfony\\Component\\Stopwatch\\' => 28,
            'Spatie\\WordPressRay\\Tests\\' => 26,
            'Spatie\\WordPressRay\\' => 20,
            'Spatie\\Ray\\' => 11,
            'Spatie\\Macroable\\' => 17,
            'Spatie\\Backtrace\\' => 17,
        ),
        'R' => 
        array (
            'Ramsey\\Uuid\\' => 12,
        ),
        'P' => 
        array (
            'Psr\\Container\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'TypistTech\\Imposter\\Plugin\\' => 
        array (
            0 => __DIR__ . '/..' . '/typisttech/imposter-plugin/src',
        ),
        'TypistTech\\Imposter\\' => 
        array (
            0 => __DIR__ . '/..' . '/typisttech/imposter/src',
        ),
        'Symfony\\Polyfill\\Php80\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-php80',
        ),
        'Symfony\\Polyfill\\Php72\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-php72',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Contracts\\Service\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/service-contracts',
        ),
        'Symfony\\Component\\VarDumper\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/var-dumper',
        ),
        'Symfony\\Component\\Stopwatch\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/stopwatch',
        ),
        'Spatie\\WordPressRay\\Tests\\' => 
        array (
            0 => __DIR__ . '/../..' . '/tests',
        ),
        'Spatie\\WordPressRay\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Spatie\\Ray\\' => 
        array (
            0 => __DIR__ . '/..' . '/spatie/ray/src',
        ),
        'Spatie\\Macroable\\' => 
        array (
            0 => __DIR__ . '/..' . '/spatie/macroable/src',
        ),
        'Spatie\\Backtrace\\' => 
        array (
            0 => __DIR__ . '/..' . '/spatie/backtrace/src',
        ),
        'Ramsey\\Uuid\\' => 
        array (
            0 => __DIR__ . '/..' . '/ramsey/uuid/src',
        ),
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Spatie\\WordPressRay\\Loggers\\HookLogger' => __DIR__ . '/../..' . '/src/Loggers/HookLogger.php',
        'Spatie\\WordPressRay\\Loggers\\MailLogger' => __DIR__ . '/../..' . '/src/Loggers/MailLogger.php',
        'Spatie\\WordPressRay\\Loggers\\QueryLogger' => __DIR__ . '/../..' . '/src/Loggers/QueryLogger.php',
        'Spatie\\WordPressRay\\OriginFactory' => __DIR__ . '/../..' . '/src/OriginFactory.php',
        'Spatie\\WordPressRay\\Payloads\\ExecutedQueryPayload' => __DIR__ . '/../..' . '/src/Payloads/ExecutedQueryPayload.php',
        'Spatie\\WordPressRay\\Payloads\\HookPayload' => __DIR__ . '/../..' . '/src/Payloads/HookPayload.php',
        'Spatie\\WordPressRay\\Payloads\\MailPayload' => __DIR__ . '/../..' . '/src/Payloads/MailPayload.php',
        'Spatie\\WordPressRay\\Psr\\Container\\ContainerExceptionInterface' => __DIR__ . '/..' . '/psr/container/src/ContainerExceptionInterface.php',
        'Spatie\\WordPressRay\\Psr\\Container\\ContainerInterface' => __DIR__ . '/..' . '/psr/container/src/ContainerInterface.php',
        'Spatie\\WordPressRay\\Psr\\Container\\NotFoundExceptionInterface' => __DIR__ . '/..' . '/psr/container/src/NotFoundExceptionInterface.php',
        'Spatie\\WordPressRay\\Ramsey\\Uuid\\BinaryUtils' => __DIR__ . '/..' . '/ramsey/uuid/src/BinaryUtils.php',
        'Spatie\\WordPressRay\\Ramsey\\Uuid\\Builder\\DefaultUuidBuilder' => __DIR__ . '/..' . '/ramsey/uuid/src/Builder/DefaultUuidBuilder.php',
        'Spatie\\WordPressRay\\Ramsey\\Uuid\\Builder\\DegradedUuidBuilder' => __DIR__ . '/..' . '/ramsey/uuid/src/Builder/DegradedUuidBuilder.php',
        'Spatie\\WordPressRay\\Ramsey\\Uuid\\Builder\\UuidBuilderInterface' => __DIR__ . '/..' . '/ramsey/uuid/src/Builder/UuidBuilderInterface.php',
        'Spatie\\WordPressRay\\Ramsey\\Uuid\\Codec\\CodecInterface' => __DIR__ . '/..' . '/ramsey/uuid/src/Codec/CodecInterface.php',
        'Spatie\\WordPressRay\\Ramsey\\Uuid\\Codec\\GuidStringCodec' => __DIR__ . '/..' . '/ramsey/uuid/src/Codec/GuidStringCodec.php',
        'Spatie\\WordPressRay\\Ramsey\\Uuid\\Codec\\StringCodec' => __DIR__ . '/..' . '/ramsey/uuid/src/Codec/StringCodec.php',
        'Spatie\\WordPressRay\\Ramsey\\Uuid\\Converter\\NumberConverterInterface' => __DIR__ . '/..' . '/ramsey/uuid/src/Converter/NumberConverterInterface.php',
        'Spatie\\WordPressRay\\Ramsey\\Uuid\\Converter\\Number\\BigNumberConverter' => __DIR__ . '/..' . '/ramsey/uuid/src/Converter/Number/BigNumberConverter.php',
        'Spatie\\WordPressRay\\Ramsey\\Uuid\\Converter\\Number\\DegradedNumberConverter' => __DIR__ . '/..' . '/ramsey/uuid/src/Converter/Number/DegradedNumberConverter.php',
        'Spatie\\WordPressRay\\Ramsey\\Uuid\\Converter\\TimeConverterInterface' => __DIR__ . '/..' . '/ramsey/uuid/src/Converter/TimeConverterInterface.php',
        'Spatie\\WordPressRay\\Ramsey\\Uuid\\Converter\\Time\\BigNumberTimeConverter' => __DIR__ . '/..' . '/ramsey/uuid/src/Converter/Time/BigNumberTimeConverter.php',
        'Spatie\\WordPressRay\\Ramsey\\Uuid\\Converter\\Time\\DegradedTimeConverter' => __DIR__ . '/..' . '/ramsey/uuid/src/Converter/Time/DegradedTimeConverter.php',
        'Spatie\\WordPressRay\\Ramsey\\Uuid\\Converter\\Time\\PhpTimeConverter' => __DIR__ . '/..' . '/ramsey/uuid/src/Converter/Time/PhpTimeConverter.php',
        'Spatie\\WordPressRay\\Ramsey\\Uuid\\DegradedUuid' => __DIR__ . '/..' . '/ramsey/uuid/src/DegradedUuid.php',
        'Spatie\\WordPressRay\\Ramsey\\Uuid\\Exception\\UnsatisfiedDependencyException' => __DIR__ . '/..' . '/ramsey/uuid/src/Exception/UnsatisfiedDependencyException.php',
        'Spatie\\WordPressRay\\Ramsey\\Uuid\\Exception\\UnsupportedOperationException' => __DIR__ . '/..' . '/ramsey/uuid/src/Exception/UnsupportedOperationException.php',
        'Spatie\\WordPressRay\\Ramsey\\Uuid\\FeatureSet' => __DIR__ . '/..' . '/ramsey/uuid/src/FeatureSet.php',
        'Spatie\\WordPressRay\\Ramsey\\Uuid\\Generator\\CombGenerator' => __DIR__ . '/..' . '/ramsey/uuid/src/Generator/CombGenerator.php',
        'Spatie\\WordPressRay\\Ramsey\\Uuid\\Generator\\DefaultTimeGenerator' => __DIR__ . '/..' . '/ramsey/uuid/src/Generator/DefaultTimeGenerator.php',
        'Spatie\\WordPressRay\\Ramsey\\Uuid\\Generator\\MtRandGenerator' => __DIR__ . '/..' . '/ramsey/uuid/src/Generator/MtRandGenerator.php',
        'Spatie\\WordPressRay\\Ramsey\\Uuid\\Generator\\OpenSslGenerator' => __DIR__ . '/..' . '/ramsey/uuid/src/Generator/OpenSslGenerator.php',
        'Spatie\\WordPressRay\\Ramsey\\Uuid\\Generator\\PeclUuidRandomGenerator' => __DIR__ . '/..' . '/ramsey/uuid/src/Generator/PeclUuidRandomGenerator.php',
        'Spatie\\WordPressRay\\Ramsey\\Uuid\\Generator\\PeclUuidTimeGenerator' => __DIR__ . '/..' . '/ramsey/uuid/src/Generator/PeclUuidTimeGenerator.php',
        'Spatie\\WordPressRay\\Ramsey\\Uuid\\Generator\\RandomBytesGenerator' => __DIR__ . '/..' . '/ramsey/uuid/src/Generator/RandomBytesGenerator.php',
        'Spatie\\WordPressRay\\Ramsey\\Uuid\\Generator\\RandomGeneratorFactory' => __DIR__ . '/..' . '/ramsey/uuid/src/Generator/RandomGeneratorFactory.php',
        'Spatie\\WordPressRay\\Ramsey\\Uuid\\Generator\\RandomGeneratorInterface' => __DIR__ . '/..' . '/ramsey/uuid/src/Generator/RandomGeneratorInterface.php',
        'Spatie\\WordPressRay\\Ramsey\\Uuid\\Generator\\RandomLibAdapter' => __DIR__ . '/..' . '/ramsey/uuid/src/Generator/RandomLibAdapter.php',
        'Spatie\\WordPressRay\\Ramsey\\Uuid\\Generator\\TimeGeneratorFactory' => __DIR__ . '/..' . '/ramsey/uuid/src/Generator/TimeGeneratorFactory.php',
        'Spatie\\WordPressRay\\Ramsey\\Uuid\\Generator\\TimeGeneratorInterface' => __DIR__ . '/..' . '/ramsey/uuid/src/Generator/TimeGeneratorInterface.php',
        'Spatie\\WordPressRay\\Ramsey\\Uuid\\Provider\\NodeProviderInterface' => __DIR__ . '/..' . '/ramsey/uuid/src/Provider/NodeProviderInterface.php',
        'Spatie\\WordPressRay\\Ramsey\\Uuid\\Provider\\Node\\FallbackNodeProvider' => __DIR__ . '/..' . '/ramsey/uuid/src/Provider/Node/FallbackNodeProvider.php',
        'Spatie\\WordPressRay\\Ramsey\\Uuid\\Provider\\Node\\RandomNodeProvider' => __DIR__ . '/..' . '/ramsey/uuid/src/Provider/Node/RandomNodeProvider.php',
        'Spatie\\WordPressRay\\Ramsey\\Uuid\\Provider\\Node\\SystemNodeProvider' => __DIR__ . '/..' . '/ramsey/uuid/src/Provider/Node/SystemNodeProvider.php',
        'Spatie\\WordPressRay\\Ramsey\\Uuid\\Provider\\TimeProviderInterface' => __DIR__ . '/..' . '/ramsey/uuid/src/Provider/TimeProviderInterface.php',
        'Spatie\\WordPressRay\\Ramsey\\Uuid\\Provider\\Time\\FixedTimeProvider' => __DIR__ . '/..' . '/ramsey/uuid/src/Provider/Time/FixedTimeProvider.php',
        'Spatie\\WordPressRay\\Ramsey\\Uuid\\Provider\\Time\\SystemTimeProvider' => __DIR__ . '/..' . '/ramsey/uuid/src/Provider/Time/SystemTimeProvider.php',
        'Spatie\\WordPressRay\\Ramsey\\Uuid\\Uuid' => __DIR__ . '/..' . '/ramsey/uuid/src/Uuid.php',
        'Spatie\\WordPressRay\\Ramsey\\Uuid\\UuidFactory' => __DIR__ . '/..' . '/ramsey/uuid/src/UuidFactory.php',
        'Spatie\\WordPressRay\\Ramsey\\Uuid\\UuidFactoryInterface' => __DIR__ . '/..' . '/ramsey/uuid/src/UuidFactoryInterface.php',
        'Spatie\\WordPressRay\\Ramsey\\Uuid\\UuidInterface' => __DIR__ . '/..' . '/ramsey/uuid/src/UuidInterface.php',
        'Spatie\\WordPressRay\\Ray' => __DIR__ . '/../..' . '/src/Ray.php',
        'Spatie\\WordPressRay\\Spatie\\Backtrace\\Backtrace' => __DIR__ . '/..' . '/spatie/backtrace/src/Backtrace.php',
        'Spatie\\WordPressRay\\Spatie\\Backtrace\\CodeSnippet' => __DIR__ . '/..' . '/spatie/backtrace/src/CodeSnippet.php',
        'Spatie\\WordPressRay\\Spatie\\Backtrace\\File' => __DIR__ . '/..' . '/spatie/backtrace/src/File.php',
        'Spatie\\WordPressRay\\Spatie\\Backtrace\\Frame' => __DIR__ . '/..' . '/spatie/backtrace/src/Frame.php',
        'Spatie\\WordPressRay\\Spatie\\Macroable\\Macroable' => __DIR__ . '/..' . '/spatie/macroable/src/Macroable.php',
        'Spatie\\WordPressRay\\Spatie\\Ray\\ArgumentConverter' => __DIR__ . '/..' . '/spatie/ray/src/ArgumentConverter.php',
        'Spatie\\WordPressRay\\Spatie\\Ray\\Client' => __DIR__ . '/..' . '/spatie/ray/src/Client.php',
        'Spatie\\WordPressRay\\Spatie\\Ray\\Concerns\\RayColors' => __DIR__ . '/..' . '/spatie/ray/src/Concerns/RayColors.php',
        'Spatie\\WordPressRay\\Spatie\\Ray\\Concerns\\RaySizes' => __DIR__ . '/..' . '/spatie/ray/src/Concerns/RaySizes.php',
        'Spatie\\WordPressRay\\Spatie\\Ray\\Concerns\\RemovesRayFrames' => __DIR__ . '/..' . '/spatie/ray/src/Concerns/RemovesRayFrames.php',
        'Spatie\\WordPressRay\\Spatie\\Ray\\Exceptions\\CouldNotConnectToRay' => __DIR__ . '/..' . '/spatie/ray/src/Exceptions/CouldNotConnectToRay.php',
        'Spatie\\WordPressRay\\Spatie\\Ray\\Exceptions\\StopExecutionRequested' => __DIR__ . '/..' . '/spatie/ray/src/Exceptions/StopExecutionRequested.php',
        'Spatie\\WordPressRay\\Spatie\\Ray\\Origin\\DefaultOriginFactory' => __DIR__ . '/..' . '/spatie/ray/src/Origin/DefaultOriginFactory.php',
        'Spatie\\WordPressRay\\Spatie\\Ray\\Origin\\Origin' => __DIR__ . '/..' . '/spatie/ray/src/Origin/Origin.php',
        'Spatie\\WordPressRay\\Spatie\\Ray\\Origin\\OriginFactory' => __DIR__ . '/..' . '/spatie/ray/src/Origin/OriginFactory.php',
        'Spatie\\WordPressRay\\Spatie\\Ray\\PayloadFactory' => __DIR__ . '/..' . '/spatie/ray/src/PayloadFactory.php',
        'Spatie\\WordPressRay\\Spatie\\Ray\\Payloads\\ApplicationLogPayload' => __DIR__ . '/..' . '/spatie/ray/src/Payloads/ApplicationLogPayload.php',
        'Spatie\\WordPressRay\\Spatie\\Ray\\Payloads\\BoolPayload' => __DIR__ . '/..' . '/spatie/ray/src/Payloads/BoolPayload.php',
        'Spatie\\WordPressRay\\Spatie\\Ray\\Payloads\\CallerPayload' => __DIR__ . '/..' . '/spatie/ray/src/Payloads/CallerPayload.php',
        'Spatie\\WordPressRay\\Spatie\\Ray\\Payloads\\CarbonPayload' => __DIR__ . '/..' . '/spatie/ray/src/Payloads/CarbonPayload.php',
        'Spatie\\WordPressRay\\Spatie\\Ray\\Payloads\\ClearAllPayload' => __DIR__ . '/..' . '/spatie/ray/src/Payloads/ClearAllPayload.php',
        'Spatie\\WordPressRay\\Spatie\\Ray\\Payloads\\ColorPayload' => __DIR__ . '/..' . '/spatie/ray/src/Payloads/ColorPayload.php',
        'Spatie\\WordPressRay\\Spatie\\Ray\\Payloads\\CreateLockPayload' => __DIR__ . '/..' . '/spatie/ray/src/Payloads/CreateLockPayload.php',
        'Spatie\\WordPressRay\\Spatie\\Ray\\Payloads\\CustomPayload' => __DIR__ . '/..' . '/spatie/ray/src/Payloads/CustomPayload.php',
        'Spatie\\WordPressRay\\Spatie\\Ray\\Payloads\\DecodedJsonPayload' => __DIR__ . '/..' . '/spatie/ray/src/Payloads/DecodedJsonPayload.php',
        'Spatie\\WordPressRay\\Spatie\\Ray\\Payloads\\FileContentsPayload' => __DIR__ . '/..' . '/spatie/ray/src/Payloads/FileContentsPayload.php',
        'Spatie\\WordPressRay\\Spatie\\Ray\\Payloads\\HideAppPayload' => __DIR__ . '/..' . '/spatie/ray/src/Payloads/HideAppPayload.php',
        'Spatie\\WordPressRay\\Spatie\\Ray\\Payloads\\HidePayload' => __DIR__ . '/..' . '/spatie/ray/src/Payloads/HidePayload.php',
        'Spatie\\WordPressRay\\Spatie\\Ray\\Payloads\\HtmlPayload' => __DIR__ . '/..' . '/spatie/ray/src/Payloads/HtmlPayload.php',
        'Spatie\\WordPressRay\\Spatie\\Ray\\Payloads\\ImagePayload' => __DIR__ . '/..' . '/spatie/ray/src/Payloads/ImagePayload.php',
        'Spatie\\WordPressRay\\Spatie\\Ray\\Payloads\\JsonStringPayload' => __DIR__ . '/..' . '/spatie/ray/src/Payloads/JsonStringPayload.php',
        'Spatie\\WordPressRay\\Spatie\\Ray\\Payloads\\LogPayload' => __DIR__ . '/..' . '/spatie/ray/src/Payloads/LogPayload.php',
        'Spatie\\WordPressRay\\Spatie\\Ray\\Payloads\\MeasurePayload' => __DIR__ . '/..' . '/spatie/ray/src/Payloads/MeasurePayload.php',
        'Spatie\\WordPressRay\\Spatie\\Ray\\Payloads\\NewScreenPayload' => __DIR__ . '/..' . '/spatie/ray/src/Payloads/NewScreenPayload.php',
        'Spatie\\WordPressRay\\Spatie\\Ray\\Payloads\\NotifyPayload' => __DIR__ . '/..' . '/spatie/ray/src/Payloads/NotifyPayload.php',
        'Spatie\\WordPressRay\\Spatie\\Ray\\Payloads\\NullPayload' => __DIR__ . '/..' . '/spatie/ray/src/Payloads/NullPayload.php',
        'Spatie\\WordPressRay\\Spatie\\Ray\\Payloads\\Payload' => __DIR__ . '/..' . '/spatie/ray/src/Payloads/Payload.php',
        'Spatie\\WordPressRay\\Spatie\\Ray\\Payloads\\RemovePayload' => __DIR__ . '/..' . '/spatie/ray/src/Payloads/RemovePayload.php',
        'Spatie\\WordPressRay\\Spatie\\Ray\\Payloads\\ShowAppPayload' => __DIR__ . '/..' . '/spatie/ray/src/Payloads/ShowAppPayload.php',
        'Spatie\\WordPressRay\\Spatie\\Ray\\Payloads\\SizePayload' => __DIR__ . '/..' . '/spatie/ray/src/Payloads/SizePayload.php',
        'Spatie\\WordPressRay\\Spatie\\Ray\\Payloads\\TablePayload' => __DIR__ . '/..' . '/spatie/ray/src/Payloads/TablePayload.php',
        'Spatie\\WordPressRay\\Spatie\\Ray\\Payloads\\TracePayload' => __DIR__ . '/..' . '/spatie/ray/src/Payloads/TracePayload.php',
        'Spatie\\WordPressRay\\Spatie\\Ray\\Ray' => __DIR__ . '/..' . '/spatie/ray/src/Ray.php',
        'Spatie\\WordPressRay\\Spatie\\Ray\\Request' => __DIR__ . '/..' . '/spatie/ray/src/Request.php',
        'Spatie\\WordPressRay\\Spatie\\Ray\\Settings\\Settings' => __DIR__ . '/..' . '/spatie/ray/src/Settings/Settings.php',
        'Spatie\\WordPressRay\\Spatie\\Ray\\Settings\\SettingsFactory' => __DIR__ . '/..' . '/spatie/ray/src/Settings/SettingsFactory.php',
        'Spatie\\WordPressRay\\Spatie\\Ray\\Support\\Counters' => __DIR__ . '/..' . '/spatie/ray/src/Support/Counters.php',
        'Spatie\\WordPressRay\\Support\\Mailable' => __DIR__ . '/../..' . '/src/Support/Mailable.php',
        'Spatie\\WordPressRay\\Symfony\\Component\\Stopwatch\\Section' => __DIR__ . '/..' . '/symfony/stopwatch/Section.php',
        'Spatie\\WordPressRay\\Symfony\\Component\\Stopwatch\\Stopwatch' => __DIR__ . '/..' . '/symfony/stopwatch/Stopwatch.php',
        'Spatie\\WordPressRay\\Symfony\\Component\\Stopwatch\\StopwatchEvent' => __DIR__ . '/..' . '/symfony/stopwatch/StopwatchEvent.php',
        'Spatie\\WordPressRay\\Symfony\\Component\\Stopwatch\\StopwatchPeriod' => __DIR__ . '/..' . '/symfony/stopwatch/StopwatchPeriod.php',
        'Spatie\\WordPressRay\\Symfony\\Component\\VarDumper\\Caster\\AmqpCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/AmqpCaster.php',
        'Spatie\\WordPressRay\\Symfony\\Component\\VarDumper\\Caster\\ArgsStub' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/ArgsStub.php',
        'Spatie\\WordPressRay\\Symfony\\Component\\VarDumper\\Caster\\Caster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/Caster.php',
        'Spatie\\WordPressRay\\Symfony\\Component\\VarDumper\\Caster\\ClassStub' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/ClassStub.php',
        'Spatie\\WordPressRay\\Symfony\\Component\\VarDumper\\Caster\\ConstStub' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/ConstStub.php',
        'Spatie\\WordPressRay\\Symfony\\Component\\VarDumper\\Caster\\CutArrayStub' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/CutArrayStub.php',
        'Spatie\\WordPressRay\\Symfony\\Component\\VarDumper\\Caster\\CutStub' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/CutStub.php',
        'Spatie\\WordPressRay\\Symfony\\Component\\VarDumper\\Caster\\DOMCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/DOMCaster.php',
        'Spatie\\WordPressRay\\Symfony\\Component\\VarDumper\\Caster\\DateCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/DateCaster.php',
        'Spatie\\WordPressRay\\Symfony\\Component\\VarDumper\\Caster\\DoctrineCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/DoctrineCaster.php',
        'Spatie\\WordPressRay\\Symfony\\Component\\VarDumper\\Caster\\DsCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/DsCaster.php',
        'Spatie\\WordPressRay\\Symfony\\Component\\VarDumper\\Caster\\DsPairStub' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/DsPairStub.php',
        'Spatie\\WordPressRay\\Symfony\\Component\\VarDumper\\Caster\\EnumStub' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/EnumStub.php',
        'Spatie\\WordPressRay\\Symfony\\Component\\VarDumper\\Caster\\ExceptionCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/ExceptionCaster.php',
        'Spatie\\WordPressRay\\Symfony\\Component\\VarDumper\\Caster\\FrameStub' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/FrameStub.php',
        'Spatie\\WordPressRay\\Symfony\\Component\\VarDumper\\Caster\\GmpCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/GmpCaster.php',
        'Spatie\\WordPressRay\\Symfony\\Component\\VarDumper\\Caster\\ImagineCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/ImagineCaster.php',
        'Spatie\\WordPressRay\\Symfony\\Component\\VarDumper\\Caster\\ImgStub' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/ImgStub.php',
        'Spatie\\WordPressRay\\Symfony\\Component\\VarDumper\\Caster\\IntlCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/IntlCaster.php',
        'Spatie\\WordPressRay\\Symfony\\Component\\VarDumper\\Caster\\LinkStub' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/LinkStub.php',
        'Spatie\\WordPressRay\\Symfony\\Component\\VarDumper\\Caster\\MemcachedCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/MemcachedCaster.php',
        'Spatie\\WordPressRay\\Symfony\\Component\\VarDumper\\Caster\\PdoCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/PdoCaster.php',
        'Spatie\\WordPressRay\\Symfony\\Component\\VarDumper\\Caster\\PgSqlCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/PgSqlCaster.php',
        'Spatie\\WordPressRay\\Symfony\\Component\\VarDumper\\Caster\\ProxyManagerCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/ProxyManagerCaster.php',
        'Spatie\\WordPressRay\\Symfony\\Component\\VarDumper\\Caster\\RedisCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/RedisCaster.php',
        'Spatie\\WordPressRay\\Symfony\\Component\\VarDumper\\Caster\\ReflectionCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/ReflectionCaster.php',
        'Spatie\\WordPressRay\\Symfony\\Component\\VarDumper\\Caster\\ResourceCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/ResourceCaster.php',
        'Spatie\\WordPressRay\\Symfony\\Component\\VarDumper\\Caster\\SplCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/SplCaster.php',
        'Spatie\\WordPressRay\\Symfony\\Component\\VarDumper\\Caster\\StubCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/StubCaster.php',
        'Spatie\\WordPressRay\\Symfony\\Component\\VarDumper\\Caster\\SymfonyCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/SymfonyCaster.php',
        'Spatie\\WordPressRay\\Symfony\\Component\\VarDumper\\Caster\\TraceStub' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/TraceStub.php',
        'Spatie\\WordPressRay\\Symfony\\Component\\VarDumper\\Caster\\UuidCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/UuidCaster.php',
        'Spatie\\WordPressRay\\Symfony\\Component\\VarDumper\\Caster\\XmlReaderCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/XmlReaderCaster.php',
        'Spatie\\WordPressRay\\Symfony\\Component\\VarDumper\\Caster\\XmlResourceCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/XmlResourceCaster.php',
        'Spatie\\WordPressRay\\Symfony\\Component\\VarDumper\\Cloner\\AbstractCloner' => __DIR__ . '/..' . '/symfony/var-dumper/Cloner/AbstractCloner.php',
        'Spatie\\WordPressRay\\Symfony\\Component\\VarDumper\\Cloner\\ClonerInterface' => __DIR__ . '/..' . '/symfony/var-dumper/Cloner/ClonerInterface.php',
        'Spatie\\WordPressRay\\Symfony\\Component\\VarDumper\\Cloner\\Cursor' => __DIR__ . '/..' . '/symfony/var-dumper/Cloner/Cursor.php',
        'Spatie\\WordPressRay\\Symfony\\Component\\VarDumper\\Cloner\\Data' => __DIR__ . '/..' . '/symfony/var-dumper/Cloner/Data.php',
        'Spatie\\WordPressRay\\Symfony\\Component\\VarDumper\\Cloner\\DumperInterface' => __DIR__ . '/..' . '/symfony/var-dumper/Cloner/DumperInterface.php',
        'Spatie\\WordPressRay\\Symfony\\Component\\VarDumper\\Cloner\\Stub' => __DIR__ . '/..' . '/symfony/var-dumper/Cloner/Stub.php',
        'Spatie\\WordPressRay\\Symfony\\Component\\VarDumper\\Cloner\\VarCloner' => __DIR__ . '/..' . '/symfony/var-dumper/Cloner/VarCloner.php',
        'Spatie\\WordPressRay\\Symfony\\Component\\VarDumper\\Command\\Descriptor\\CliDescriptor' => __DIR__ . '/..' . '/symfony/var-dumper/Command/Descriptor/CliDescriptor.php',
        'Spatie\\WordPressRay\\Symfony\\Component\\VarDumper\\Command\\Descriptor\\DumpDescriptorInterface' => __DIR__ . '/..' . '/symfony/var-dumper/Command/Descriptor/DumpDescriptorInterface.php',
        'Spatie\\WordPressRay\\Symfony\\Component\\VarDumper\\Command\\Descriptor\\HtmlDescriptor' => __DIR__ . '/..' . '/symfony/var-dumper/Command/Descriptor/HtmlDescriptor.php',
        'Spatie\\WordPressRay\\Symfony\\Component\\VarDumper\\Command\\ServerDumpCommand' => __DIR__ . '/..' . '/symfony/var-dumper/Command/ServerDumpCommand.php',
        'Spatie\\WordPressRay\\Symfony\\Component\\VarDumper\\Dumper\\AbstractDumper' => __DIR__ . '/..' . '/symfony/var-dumper/Dumper/AbstractDumper.php',
        'Spatie\\WordPressRay\\Symfony\\Component\\VarDumper\\Dumper\\CliDumper' => __DIR__ . '/..' . '/symfony/var-dumper/Dumper/CliDumper.php',
        'Spatie\\WordPressRay\\Symfony\\Component\\VarDumper\\Dumper\\ContextProvider\\CliContextProvider' => __DIR__ . '/..' . '/symfony/var-dumper/Dumper/ContextProvider/CliContextProvider.php',
        'Spatie\\WordPressRay\\Symfony\\Component\\VarDumper\\Dumper\\ContextProvider\\ContextProviderInterface' => __DIR__ . '/..' . '/symfony/var-dumper/Dumper/ContextProvider/ContextProviderInterface.php',
        'Spatie\\WordPressRay\\Symfony\\Component\\VarDumper\\Dumper\\ContextProvider\\RequestContextProvider' => __DIR__ . '/..' . '/symfony/var-dumper/Dumper/ContextProvider/RequestContextProvider.php',
        'Spatie\\WordPressRay\\Symfony\\Component\\VarDumper\\Dumper\\ContextProvider\\SourceContextProvider' => __DIR__ . '/..' . '/symfony/var-dumper/Dumper/ContextProvider/SourceContextProvider.php',
        'Spatie\\WordPressRay\\Symfony\\Component\\VarDumper\\Dumper\\ContextualizedDumper' => __DIR__ . '/..' . '/symfony/var-dumper/Dumper/ContextualizedDumper.php',
        'Spatie\\WordPressRay\\Symfony\\Component\\VarDumper\\Dumper\\DataDumperInterface' => __DIR__ . '/..' . '/symfony/var-dumper/Dumper/DataDumperInterface.php',
        'Spatie\\WordPressRay\\Symfony\\Component\\VarDumper\\Dumper\\HtmlDumper' => __DIR__ . '/..' . '/symfony/var-dumper/Dumper/HtmlDumper.php',
        'Spatie\\WordPressRay\\Symfony\\Component\\VarDumper\\Dumper\\ServerDumper' => __DIR__ . '/..' . '/symfony/var-dumper/Dumper/ServerDumper.php',
        'Spatie\\WordPressRay\\Symfony\\Component\\VarDumper\\Exception\\ThrowingCasterException' => __DIR__ . '/..' . '/symfony/var-dumper/Exception/ThrowingCasterException.php',
        'Spatie\\WordPressRay\\Symfony\\Component\\VarDumper\\Server\\Connection' => __DIR__ . '/..' . '/symfony/var-dumper/Server/Connection.php',
        'Spatie\\WordPressRay\\Symfony\\Component\\VarDumper\\Server\\DumpServer' => __DIR__ . '/..' . '/symfony/var-dumper/Server/DumpServer.php',
        'Spatie\\WordPressRay\\Symfony\\Component\\VarDumper\\Test\\VarDumperTestTrait' => __DIR__ . '/..' . '/symfony/var-dumper/Test/VarDumperTestTrait.php',
        'Spatie\\WordPressRay\\Symfony\\Component\\VarDumper\\VarDumper' => __DIR__ . '/..' . '/symfony/var-dumper/VarDumper.php',
        'Spatie\\WordPressRay\\Symfony\\Contracts\\Service\\ResetInterface' => __DIR__ . '/..' . '/symfony/service-contracts/ResetInterface.php',
        'Spatie\\WordPressRay\\Symfony\\Contracts\\Service\\ServiceLocatorTrait' => __DIR__ . '/..' . '/symfony/service-contracts/ServiceLocatorTrait.php',
        'Spatie\\WordPressRay\\Symfony\\Contracts\\Service\\ServiceProviderInterface' => __DIR__ . '/..' . '/symfony/service-contracts/ServiceProviderInterface.php',
        'Spatie\\WordPressRay\\Symfony\\Contracts\\Service\\ServiceSubscriberInterface' => __DIR__ . '/..' . '/symfony/service-contracts/ServiceSubscriberInterface.php',
        'Spatie\\WordPressRay\\Symfony\\Contracts\\Service\\ServiceSubscriberTrait' => __DIR__ . '/..' . '/symfony/service-contracts/ServiceSubscriberTrait.php',
        'Spatie\\WordPressRay\\Symfony\\Contracts\\Service\\Test\\ServiceLocatorTest' => __DIR__ . '/..' . '/symfony/service-contracts/Test/ServiceLocatorTest.php',
        'Spatie\\WordPressRay\\Symfony\\Polyfill\\Mbstring\\Mbstring' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/Mbstring.php',
        'Spatie\\WordPressRay\\Symfony\\Polyfill\\Php72\\Php72' => __DIR__ . '/..' . '/symfony/polyfill-php72/Php72.php',
        'Spatie\\WordPressRay\\Symfony\\Polyfill\\Php80\\Php80' => __DIR__ . '/..' . '/symfony/polyfill-php80/Php80.php',
        'Spatie\\WordPressRay\\Tests\\ExampleTest' => __DIR__ . '/../..' . '/tests/ExampleTest.php',
        'Stringable' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/Stringable.php',
        'TypistTech\\Imposter\\ArrayUtil' => __DIR__ . '/..' . '/typisttech/imposter/src/ArrayUtil.php',
        'TypistTech\\Imposter\\Config' => __DIR__ . '/..' . '/typisttech/imposter/src/Config.php',
        'TypistTech\\Imposter\\ConfigCollection' => __DIR__ . '/..' . '/typisttech/imposter/src/ConfigCollection.php',
        'TypistTech\\Imposter\\ConfigCollectionFactory' => __DIR__ . '/..' . '/typisttech/imposter/src/ConfigCollectionFactory.php',
        'TypistTech\\Imposter\\ConfigCollectionInterface' => __DIR__ . '/..' . '/typisttech/imposter/src/ConfigCollectionInterface.php',
        'TypistTech\\Imposter\\ConfigFactory' => __DIR__ . '/..' . '/typisttech/imposter/src/ConfigFactory.php',
        'TypistTech\\Imposter\\ConfigInterface' => __DIR__ . '/..' . '/typisttech/imposter/src/ConfigInterface.php',
        'TypistTech\\Imposter\\Filesystem' => __DIR__ . '/..' . '/typisttech/imposter/src/Filesystem.php',
        'TypistTech\\Imposter\\FilesystemInterface' => __DIR__ . '/..' . '/typisttech/imposter/src/FilesystemInterface.php',
        'TypistTech\\Imposter\\Imposter' => __DIR__ . '/..' . '/typisttech/imposter/src/Imposter.php',
        'TypistTech\\Imposter\\ImposterFactory' => __DIR__ . '/..' . '/typisttech/imposter/src/ImposterFactory.php',
        'TypistTech\\Imposter\\ImposterInterface' => __DIR__ . '/..' . '/typisttech/imposter/src/ImposterInterface.php',
        'TypistTech\\Imposter\\Plugin\\AutoloadMerger' => __DIR__ . '/..' . '/typisttech/imposter-plugin/src/AutoloadMerger.php',
        'TypistTech\\Imposter\\Plugin\\ImposterPlugin' => __DIR__ . '/..' . '/typisttech/imposter-plugin/src/ImposterPlugin.php',
        'TypistTech\\Imposter\\Plugin\\Transformer' => __DIR__ . '/..' . '/typisttech/imposter-plugin/src/Transformer.php',
        'TypistTech\\Imposter\\ProjectConfig' => __DIR__ . '/..' . '/typisttech/imposter/src/ProjectConfig.php',
        'TypistTech\\Imposter\\ProjectConfigInterface' => __DIR__ . '/..' . '/typisttech/imposter/src/ProjectConfigInterface.php',
        'TypistTech\\Imposter\\StringUtil' => __DIR__ . '/..' . '/typisttech/imposter/src/StringUtil.php',
        'TypistTech\\Imposter\\Transformer' => __DIR__ . '/..' . '/typisttech/imposter/src/Transformer.php',
        'TypistTech\\Imposter\\TransformerInterface' => __DIR__ . '/..' . '/typisttech/imposter/src/TransformerInterface.php',
        'ValueError' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/ValueError.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit000e31ec00eb6e379fc2501d4709f6fe::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit000e31ec00eb6e379fc2501d4709f6fe::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit000e31ec00eb6e379fc2501d4709f6fe::$classMap;

        }, null, ClassLoader::class);
    }
}
