<?php

namespace YaPro\MarkerInterfaces\Base;

/**
 * Data Transfer Object - это DataTransferObjectInterface, состояние которого приобретается в момент создания и более
 * не меняется.
 */
interface ImmutableDataTransferObjectInterface extends ImmutableInterface, DataTransferObjectInterface {}
